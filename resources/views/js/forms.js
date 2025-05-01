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
                    'X-Requested-With': 'XMLHttpRequest'
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
                    // Mettre à jour les champs dépendants si nécessaire
                    updateDependentFields(objectData);
                } catch (e) {
                    console.error('Erreur lors du parsing des données:', e);
                }
            }
        });
    });
});

// Fonction pour mettre à jour les champs dépendants
function updateDependentFields(data) {
    // Pour chaque propriété dans les données
    Object.entries(data).forEach(([key, value]) => {
        // Chercher des champs qui pourraient dépendre de cette donnée
        const dependentField = document.querySelector(`[data-depends-on="${key}"]`);
        if (dependentField) {
            if (dependentField.tagName === 'SELECT') {
                // Mettre à jour les options du select
                updateSelectOptions(dependentField, value);
            } else {
                // Mettre à jour la valeur du champ
                dependentField.value = value;
            }
        }
    });
}

// Fonction pour mettre à jour les options d'un select
function updateSelectOptions(select, data) {
    // Vider les options actuelles
    select.innerHTML = '<option value="">Sélectionner une option</option>';
    
    // Ajouter les nouvelles options
    if (Array.isArray(data)) {
        data.forEach(item => {
            const option = document.createElement('option');
            option.value = item.id || item.value || item;
            option.textContent = item.name || item.titre || item;
            select.appendChild(option);
        });
    }
}

// Fonction pour fermer un modal
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('hidden');
        // Réinitialiser le formulaire
        const form = modal.querySelector('form');
        if (form) {
            form.reset();
        }
    }
}