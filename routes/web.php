<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HRController;





// Route::get('/',function() {
//     return view("layoutHR");
// });
// Route::get('Evaluationform',function() {
//     return view("Evaluationform");
// });
// Route::get('addEvaluationform',function() {
//     return view("addEvaluationform");
// });
// Route::get('allEmployee',function() {
//     return view("allEmployee");
// });    
// Route::get('teamEmployee',function() {
//     return view("teamEmployee");

// });
// Route::get('Evalutiontopic',function() {
//     return view("Evalutiontopic");
// });
// Route::get('result',function() {
//     return view("result");
// });
// Route::get('/allEmployee', [HRController::class, 'index']);

use App\Http\Controllers\ResultHRController;
use App\Http\Controllers\RubricAssessmentHRController;
use App\Http\Controllers\EvaluationtopicHRController;
use App\Http\Controllers\SetKpiHRController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\CriteriakpiController;
use App\Http\Controllers\CriterionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EvalutionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\RoundController;
use App\Http\Controllers\SaleteamController;
use App\Http\Controllers\SelectionkpiController;
use App\Http\Controllers\SetkpiController;
use App\Http\Controllers\TeamleaderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});
Route::get('/setkpi', [SetkpiController::class, 'index'])->name('setkpi.index');
Route::get('/setkpi/create', [SetkpiController::class, 'create'])->name('setkpi.create');
Route::post('/setkpi', [SetkpiController::class, 'store'])->name('setkpi.store');
Route::get('/setkpi/{setkpi}/edit', [SetkpiController::class, 'edit'])->name('setkpi.edit');
Route::put('/setkpi/{setkpi}/update', [SetkpiController::class, 'update'])->name('setkpi.update');
Route::delete('/setkpi/{setkpi}/delete', [SetkpiController::class, 'delete'])->name('setkpi.delete');

Route::get('/round', [RoundController::class, 'index'])->name('round.index');
Route::get('/round/create', [RoundController::class, 'create'])->name('round.create');
Route::post('/round', [RoundController::class, 'store'])->name('round.store');
Route::get('/round/{round}/edit', [RoundController::class, 'edit'])->name('round.edit');
Route::put('/round/{round}/update', [RoundController::class, 'update'])->name('round.update');
Route::delete('/round/{round}/delete', [RoundController::class, 'delete'])->name('round.delete');

Route::get('/selectionkpi', [SelectionkpiController::class, 'index'])->name('selectionkpi.index');
Route::get('/selectionkpi/create', [SelectionkpiController::class, 'create'])->name('selectionkpi.create');
Route::post('/selectionkpi', [SelectionkpiController::class, 'store'])->name('selectionkpi.store');
Route::get('/selectionkpi/{selectionkpi}/edit', [SelectionkpiController::class, 'edit'])->name('selectionkpi.edit');
Route::put('/selectionkpi/{selectionkpi}/update', [SelectionkpiController::class, 'update'])->name('selectionkpi.update');
Route::delete('/selectionkpi/{selectionkpi}/delete', [SelectionkpiController::class, 'delete'])->name('selectionkpi.delete');

Route::get('/evaluation', [EvalutionController::class, 'index'])->name('evaluationindex');
Route::get('/evaluation/create', [EvalutionController::class, 'create'])->name('evaluation.create');
Route::post('/evaluation', [EvalutionController::class, 'store'])->name('evaluation.store');
Route::get('/evaluation/{evaluation}/edit', [EvalutionController::class, 'edit'])->name('evaluation.edit');
Route::put('/evaluation/{evaluation}/update', [EvalutionController::class, 'update'])->name('evaluation.update');
Route::delete('/evaluation/{evaluation}/delete', [EvalutionController::class, 'delete'])->name('evaluation.delete');

Route::get('/result', [ResultsController::class, 'index'])->name('result.index');
Route::get('/result/create', [ResultsController::class, 'create'])->name('result.create');
Route::post('/result', [ResultsController::class, 'store'])->name('result.store');
Route::get('/result/{result}/edit', [ResultsController::class, 'edit'])->name('result.edit');
Route::put('/result/{result}/update', [ResultsController::class, 'update'])->name('result.update');
Route::delete('/result/{result}/delete', [ResultsController::class, 'delete'])->name('result.delete');



// Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
// Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
// Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');

Route::get('/saleteam', [SaleteamController::class, 'index'])->name('saleteam.index');
Route::get('/saleteam/create', [SaleteamController::class, 'create'])->name('saleteam.create');
Route::post('/saleteam', [SaleteamController::class, 'listofname'])->name('saleteam.listofname');
Route::get('/saleteam/{saleteam}/edit', [SaleteamController::class, 'edit'])->name('saleteam.edit');
Route::put('/saleteam/{saleteam}/update', [SaleteamController::class, 'update'])->name('saleteam.update');
Route::delete('/saleteam/{saleteam}/destroy', [SaleteamController::class, 'destroy'])->name('saleteam.destroy');

Route::get('/criteriakpi', [CriteriakpiController::class, 'index'])->name('criteriakpi.index');
Route::get('/criteriakpi/create', [CriteriakpiController::class, 'create'])->name('criteriakpi.create');
Route::post('/criteriakpi', [CriteriakpiController::class, 'listofname'])->name('criteriakpi.listofname');
Route::get('/criteriakpi/{criteriakpi}/edit', [CriteriakpiController::class, 'edit'])->name('criteriakpi.edit');
Route::put('/criteriakpi/{criteriakpi}/update', [CriteriakpiController::class, 'update'])->name('criteriakpi.update');
Route::delete('/criteriakpi/{criteriakpi}/destroy', [CriteriakpiController::class, 'destroy'])->name('criteriakpi.destroy');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/feedback/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'listofname'])->name('feedback.listofname');
Route::get('/feedback/{feedback}/edit', [FeedbackController::class, 'edit'])->name('feedback.edit');
Route::put('/feedback/{feedback}/update', [FeedbackController::class, 'update'])->name('feedback.update');
Route::delete('/feedback/{feedback}/destroy', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

Route::get('/criterion', [CriterionController::class, 'index'])->name('criterion.index');
Route::get('/criterion/create', [CriterionController::class, 'create'])->name('criterion.create');
Route::post('/criterion', [CriterionController::class, 'listofname'])->name('criterion.listofname');
Route::get('/criterion/{criterion}/edit', [CriterionController::class, 'edit'])->name('criterion.edit');
Route::put('/criterion/{criterion}/update', [CriterionController::class, 'update'])->name('criterion.update');
Route::delete('/criterion/{criterion}/destroy', [CriterionController::class, 'destroy'])->name('criterion.destroy');


Route::get('layoutHR',function() {
  return view('layoutHR');
});

Route::get('test', function () {
  return view('test');
})->name('test');
Route::get('/Setkpi/employee',[TeamleaderController::class,'employee'])->name('employee');
Route::get('/Setkpi/employeeteam',[TeamleaderController::class,'employeeteam'])->name('employeeteam');
Route::get('/Setkpi/evaluationform',[TeamleaderController::class,'evaluationform'])->name('evaluation.form');
Route::get('/Setkpi/evaluationsubmitform',[TeamleaderController::class,'evaluationsubmitform'])->name('evaluation.submitform');
Route::get('/Setkpi/resultkpi',[TeamleaderController::class,'resultkpi'])->name('resultkpi');
//-->HR
Route::get('/allemployee', [HRController::class, 'index'])->name('allemployee');
Route::get('allemployee/addemployee', [HRController::class, 'create'])->name('addemployee');
Route::get('allemployee/{employee}/editEmployee', [HRController::class, 'create'])->name('editEmployee');
Route::get('allemployee', [HRController::class, 'index'])->name('listofname');
Route::get('allemployee/{employee}/updateEmployee', [HRController::class, 'create'])->name('updateEmployee');
// Route::get('allemployee/{employee}/destroyEmployee', [HRController::class, 'create'])->name('destroyEmployee');

Route::get('/Evaluationform', [SetKpiHRController::class, 'index'])->name('evaluationform');
Route::get('/Evaluationtopic', [EvaluationtopicHRController::class, 'index'])->name('evaluationtopic');
Route::get('/RubricAssessment', [RubricAssessmentHRController::class, 'index'])->name('RubricAssessment');
Route::get('/resultHR', [ResultHRController::class, 'index'])->name('resultHR');

Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('allemployee', [HRController::class, 'listofname'])->name('allemployee.listofname');
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
// Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::post('allemployee/{employee}/destroy', [HRController::class, 'destroy'])->name('destroyEmployee');