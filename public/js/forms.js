document.addEventListener('DOMContentLoaded', function() {
    // Gestionnaire pour la soumission du formulaire d'édition
    const editForm = document.getElementById('editForm');
    if (editForm) {
        editForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validation des champs requis
            const requiredFields = editForm.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                } else {
                    field.classList.remove('border-red-500');
                }
            });

            if (!isValid) {
                alert('Veuillez remplir tous les champs obligatoires');
                return;
            }

            // Soumission du formulaire via AJAX
            const formData = new FormData(editForm);
            fetch(editForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Fermer le modal et rafraîchir la page
                    closeModal('editModal');
                    window.location.reload();
                } else {
                    alert(data.message || 'Une erreur est survenue');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert('Une erreur est survenue lors de la modification');
            });
        });
    }

    // Gestionnaire pour les selects avec données complexes
    document.querySelectorAll('select.select-field').forEach(select => {
        select.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            if (selectedOption.dataset.object) {
                try {
                    const objectData = JSON.parse(selectedOption.dataset.object);
                    updateDependentFields(objectData);
                } catch (e) {
                    console.error('Erreur lors du parsing des données:', e);
                }
            }
        });
    });
});

function updateDependentFields(data) {
    Object.entries(data).forEach(([key, value]) => {
        const dependentField = document.querySelector(`[data-depends-on="${key}"]`);
        if (dependentField) {
            if (dependentField.tagName === 'SELECT') {
                updateSelectOptions(dependentField, value);
            } else {
                dependentField.value = value;
            }
        }
    });
}

function updateSelectOptions(select, data) {
    select.innerHTML = '<option value="">Sélectionner une option</option>';
    
    if (Array.isArray(data)) {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.id || item.value || item;
            option.textContent = item.name || item.titre || item;
            if (typeof item === 'object') {
                option.dataset.object = JSON.stringify(item);
            }
            select.appendChild(option);
        });
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('hidden');
        const form = modal.querySelector('form');
        if (form) {
            form.reset();
        }
    }
}

function openEditModal(id, data) {
    fetch(`${window.location.pathname}/${id}/edit`)
        .then(response => response.json())
        .then(data => {
            const modal = document.getElementById('editModal');
            if (modal) {
                modal.classList.remove('hidden');
                
                // Mettre à jour l'action du formulaire
                const form = modal.querySelector('form');
                if (form) {
                    form.action = `${window.location.pathname}/${id}`;
                    
                    // Remplir les champs
                    Object.entries(data).forEach(([key, value]) => {
                        const field = form.querySelector(`[name="${key}"]`);
                        if (field) {
                            if (field.tagName === 'SELECT') {
                                const option = Array.from(field.options).find(opt => 
                                    opt.value == (value?.id || value)
                                );
                                if (option) {
                                    option.selected = true;
                                    field.dispatchEvent(new Event('change'));
                                }
                            } else {
                                field.value = value;
                            }
                        }
                    });
                }
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Erreur lors du chargement des données');
        });
}