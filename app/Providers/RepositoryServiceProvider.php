<?php
namespace App\Providers;
use App\Repositories\Interfaces\IStudentRepository;
use App\Repositories\Interfaces\ISubjectRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use Illuminate\Support\ServiceProvider;
use App\Student;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bind the interface to an implementation repository class
     */
    public function register()
    {
        $this->app->bind(IStudentRepository::class, function ($app) {
            return new StudentRepository(Student::class);
        });
    }
}