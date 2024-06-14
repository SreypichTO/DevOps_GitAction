<?php

namespace Tests\Feature;
use function PHPUnit\Framework\assertTrue;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Student;
class CreateStudentTest extends TestCase
{
    use RefreshDatabase; // This trait resets the database after each test

    /** @test */
    public function it_creates_a_student()
    {
        $student = Student::create([
            'name' => 'John Doe',
            'email' => '<your_name>@itc.edu.kh',
            'phone' => '012 345 678',
            'dob' => '2003-10-01'
        ]);
        assertTrue($student->exists());


    }
}
