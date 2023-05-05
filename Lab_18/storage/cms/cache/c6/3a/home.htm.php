<?php 
use Kuzin73\Testdata\Models\News;class Cms645558ef9b06d723804719_98ed9eb9dc96026b5ba95fb66f9c0ae3Class extends Cms\Classes\PageCode
{

public function onStart(){
    $news = News::all();
    $this ['arrNews'] = $news;
}
public function onGetdata(){
    $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'text' => 'required|min:8',
    ];

    $validation  = Validator::make(Input::post(), $rules);

     if ($validation ->fails()) {
        throw new ValidationException($validation);
    }
   
   Flash::success('You did it!');
    
}
public function onFile(){
    $data=post();
     
    $exists = Storage::disk('local')->exists('logs.txt');
    
    
    if ($exists) {
        Storage::append('logs.txt', implode("\t|\t", $data));
    } else {
        Storage::disk('local')->put(
            'logs.txt', 
            "Name\t|\tEmail\t|\tNumber\t|\tLocation \n" . implode("\t|\t", $data));
    }
    
    $fileData = Storage::get('logs.txt');
    
    Flash::info($fileData);
    
}
public function onMail(){
    
    $data=post();
    
    $userName = $data['name'];
    $userEmail = $data['email'];
    $userText = $data['text'];
    
    $vars = ['name' => $userName, 'user' => $userEmail, 'text' => $userText];
    
    Mail::sendTo($userEmail, 'test.sandmail', $vars);
    
    Flash::success('Email sent!');   
}
public function onSaveBD(){
    $qwe = new News;
    $qwe->title =post('title');
    $qwe->text = post('text');
    $qwe->image = Input::file('file_input');
    $qwe->save();
}
}
