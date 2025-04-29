<?php

namespace App\Providers;


use App\Repositories\IRoleRepository;
use App\Repositories\IUserRepository;
use App\Repositories\IAdminRepository;
use App\Repositories\ICoursRepository;
use App\Repositories\IVideoRepository;
use App\Repositories\IClasseRepository;
use App\Repositories\IExamenRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\IDocumentRepository;
use App\Repositories\IApprenantRepository;
use App\Repositories\IFormateurRepository;
use App\Repositories\IRessourceRepository;
use App\Repositories\IClasseRoomRepository;
use App\Repositories\Implementations\RoleRepository;
use App\Repositories\Implementations\UserRepository;
use App\Repositories\Implementations\AdminRepository;
use App\Repositories\Implementations\CoursRepository;
use App\Repositories\Implementations\VideoRepository;
use App\Repositories\Implementations\ClasseRepository;
use App\Repositories\Implementations\ExamenRepository;
use App\Repositories\Implementations\DocumentRepository;
use App\Repositories\Implementations\ApprenantRepository;
use App\Repositories\Implementations\ClassRoomRepository;
use App\Repositories\Implementations\FormateurRepository;
use App\Repositories\Implementations\RessourceRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IUserRepository::class,UserRepository::class);
        $this->app->bind(IRoleRepository::class,RoleRepository::class);
        $this->app->bind(IVideoRepository::class,VideoRepository::class);
        $this->app->bind(IRessourceRepository::class,RessourceRepository::class);
        $this->app->bind(IFormateurRepository::class,FormateurRepository::class);
        $this->app->bind(IExamenRepository::class,ExamenRepository::class);
        $this->app->bind(IDocumentRepository::class,DocumentRepository::class);
        $this->app->bind(ICoursRepository::class,CoursRepository::class);
        $this->app->bind(IClasseRepository::class,ClasseRepository::class);
        $this->app->bind(IClasseRoomRepository::class,ClassRoomRepository::class);
        $this->app->bind(IAdminRepository::class,AdminRepository::class);
        $this->app->bind(IApprenantRepository::class,ApprenantRepository::class);
       

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
