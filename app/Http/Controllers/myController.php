<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\library;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    public function IndexPage(){
        return view('Index');
    }
    public function User(){
        return view('User');
    }
    public function AddUser(){
        return view('AddUser');
    }
    public function AdminPage(Request $request){
        return view('Admin');
    }
    public function AddBook(Request $request){
        if ($request->isMethod('post')) {
            $title = $request->input('title');
            $author = $request->input('author');
            $publisher = $request->input('publisher');
            $category = $request->input('category');
            DB::insert('insert into books (bookTitle, author, publisherName, categories) values (?, ?, ?, ?)', [$title, $author, $publisher, $category]);
        }
        return view('AddBook');
    }
    public function BookTable(){

        $results = DB::select('select * from books');

        return view('BookTable', ['books'=>$results]);
    }
    public function bookDelete($bookID){
        $result = DB::delete('delete from books where bookId = ?', [$bookID]);
        if($result){
            return redirect()->to('/BookTable');
        }
    }
    public function AddStudent(Request $request){
        if ($request->isMethod('post')) {
            $name = $request->input('name');
            $studentID = $request->input('studentId');
            $dept = $request->input('dept');
            $email = $request->input('email');
            $phone = $request->input('phone');
            DB::insert('insert into students (name, studentId, dept, email, phoneNumber) values (?, ?, ?, ?, ?)', [$name, $studentID, $dept, $email, $phone]);
        }
        return view('AddStudent');
    }
    public function ViewStudent(){
        $student = DB::select('select * from students');
        return view('ViewStudent', ['students'=>$student]);
    }
    public function studentDelete($studentID){
        $result = DB::delete('delete from students where studentId = ?', [$studentID]);
        if($result){
            return redirect()->to('/ViewStudent');
        }
    }
    public function LendBook(Request $request){
        if ($request->isMethod('post')) {
            $bookId = $request->input('bookId');
            $studentID = $request->input('studentID');
            $borrowDate = $request->input('borrowDate');
            $dueDate = $request->input('dueDate');
            DB::insert('insert into borrow (borrowDate, returnDate, bookId, studentId) values (?, ?, ?, ?)', [$borrowDate, $dueDate, $bookId, $studentID]);
        }
        return view('LendBook');
    }
    public function BorrowBook(){
        $results = DB::select('select * from borrow,students,books where borrow.studentId=students.studentId and borrow.bookId=books.bookId');
        return view('BorrowBook', ['borrow'=>$results]);
    }
    public function borrowDelete($borrowID){
        $result = DB::delete('delete from borrow where borrowId = ?', [$borrowID]);
        if($result){
            return redirect()->to('/BorrowBook');
        }
    }
    public function show()
    {
        return view('auth.register');
    }
    
}
