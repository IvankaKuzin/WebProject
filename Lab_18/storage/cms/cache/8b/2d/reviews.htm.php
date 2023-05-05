<?php 
use Kuzin73\Testdata\Models\Comments;class Cms645559239fe3a453181571_2f785fbef7fb060389b38a81549a7d24Class extends Cms\Classes\PageCode
{

public function onStart(){
    $comments = Comments::all();
    $this ['arrComments'] = $comments;
}
public function onGetdata(){
    $rules = [
        'name' => 'required',
        'text' => 'required|min:8',
    ];

    $validation  = Validator::make(Input::post(), $rules);

     if ($validation ->fails()) {
        throw new ValidationException($validation);
    }
   
   Flash::success('You did it!');
    
}
public function onSaveBD(){
    $qwe = new Comments;
    $qwe->name =post('name');
    $qwe->comment = post('text');
    $qwe->image = Input::file('file_input');
    $qwe->save();
}
}
