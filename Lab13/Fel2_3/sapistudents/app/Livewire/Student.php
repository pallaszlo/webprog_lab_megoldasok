<?php

namespace App\Livewire;

use App\Models\Student as Students;
use Livewire\Component;

class Student extends Component
{
    public $students;
    public $name;
    public $email;
    public $grade;
    public $studentId;
    public $updateStudent = false;
    public $addStudent = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteStudentListner'=>'deleteStudent'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields(){
        $this->name = '';
        $this->email = '';
    }
    public function render()
    {
        $this->students = Students::all();
        return view('livewire.student');
    }

    /**
     * Open Add Post form
     * @return void
     */
    public function addStudentForm()
    {
        $this->resetFields();
        $this->addStudent = true;
        $this->updateStudent = false;
    }

    /**
     * store the user inputted post data in the posts table
     * @return void
     */
    public function store()
    {
        $this->validate();
        try {
            Students::create([
                'name' => $this->name,
                'email' => $this->email
            ]);
            session()->flash('success','Student Created Successfully!!');
            $this->resetFields();
            $this->addStudent = false;
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }
    }

    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function edit($id){
        try {
            $student = Students::findOrFail($id);
            if( !$student) {
                session()->flash('error','Student not found');
            } else {
                $this->name = $student->name;
                $this->email = $student->email;
                $this->studentId = $student->id;
                $this->updateStudent = true;
                $this->addStudent = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error','Something goes wrong!!');
        }

    }

    /**
     * update the post data
     * @return void
     */
    public function update()
    {
        //$this->validate();
        try {
            $student = Students::find($this->studentId);
            $student->update([
                'name' => $this->name,
                'email' => $this->email
            ]);
            session()->flash('success','Student Updated Successfully!!');
            $this->resetFields();
            $this->updateStudent = false;
        } catch (\Exception $ex) {
            session()->flash('success','Something goes wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to post listing page
     * @return void
     */
    public function cancel()
    {
        $this->addStudent = false;
        $this->updateStudent = false;
        $this->resetFields();
    }

    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function delete($id)
    {
        try{
            Students::find($id)->delete();
            session()->flash('success',"Student Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong!!");
        }
    }
}
