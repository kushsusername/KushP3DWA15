<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToolsController extends Controller {

        /**
    * Responds to requests to GET /xkcdpassword
    */
    public function getXkcdPassword() {
        return view('tools.xkcdpassword', ['error' => '', 'xkcdpassword' => '']);
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postXkcdPassword() {
      $words = array('condition','nippy','lettuce','subsequent','cap','tenuous',
      'obese','surround','ill','known','awake','bells','drain','toes','hope','fancy',
      'impossible','leg','beef','furtive','hole','double','cactus','stranger',
      'animal','outstanding','smelly','reward','thrill','bucket','willing','puzzling',
      'guarantee','part','impolite','nonstop','grape','call','drum','answer',
      'physical','pan','doubt','value','thing','miniature','sleepy','wrong','shock',
      'curvy','wrench','sin','wing','tendency','reaction','tough','worthless',
      'instruct','choke','receptive','wandering','orange','appear','regret','few',
      'nifty','respect','puzzled','female','pushy','fruit','oafish','middle',
      'selection','perform','copy','coat','right','domineering','press','cold',
      'blue','snails','friend','paltry','flimsy','roasted','abject','empty','replace',
      'horrible','ocean','hurried','abiding','relation','bomb','wistful','describe',
      'command','utter','material','rat','group','pig','bow','strip','grumpy','machine',
      'decide','disgusted','base','hobbies','bedroom','noise','attract','medical',
      'creature','pumped','word','pest','rabbit','helpless','complete','committee',
      'milk','lowly','untidy','wink','TRUE','plain','grain','kaput','direful',
      'aggressive','want','judge','drop','bee','divide','spoil','empty','permissible',
      'longing','cheat','toothbrush','poised','income','heat','jaded','puny',
      'faithful','tightfisted','owe','eye','crowd','minor','clover','self','listen',
      'disagree','expert','fortunate','light','acoustic','print','back','tax',
      'smoggy','acoustics','release','judicious','hellish','exclusive','murder',
      'useless','guarded','heartbreaking','two','big','plausible','cut','third',
      'waste','aquatic','question','recognise','sloppy','hammer','demonic','writing',
      'rapid','long','room','queen','tiny','debonair','exuberant','apathetic',
      'periodic','spooky','brown','road','picayune','whine','license','strengthen',
      'store','shiny','foregoing','sound','easy','boiling','suggest','dreary',
      'offend','saw','close','slippery','oranges','homeless','amount','soggy',
      'unbecoming','distribution','worried','alcoholic','scold','cart','loving',
      'round','humorous','gainful','rely','nosy','frightening','wakeful',
      'development','illustrious','incompetent','cars','crabby','tawdry',
      'magenta','scatter','work','drop','man','dear','bloody','serve');

      $symbols = array('!','@','#','$',"%","&");
      $xkcdpassword = "";
      $error = "";
      $wordcount = $_POST["wordcount"];
      $numbercount = $_POST["numbercount"];
      $symbol = $_POST["symbol"];

      if (!(ctype_digit($wordcount))){
        $error .= "Input value for word count is not a valid integer. \n";
      } elseif ($wordcount < 1 || $wordcount > 10) {
        $error .= "Word count must be at least 1 and less than 10. \n";
      }
      if (!(ctype_digit($numbercount))){
        $error .= "Input value for number count is not a valid integer. \n";
      } elseif ($numbercount < 1 || $numbercount > 10) {
        $error .= "Number count must be at least 1 and less than 10. \n";
      }
      if ($error == "") {
        while ($wordcount > 0) {
          $xkcdpassword .= $words[rand(0,249)];
          $wordcount--;
        }
        while ($numbercount > 0) {
          $xkcdpassword .= rand(0,9);
          $numbercount --;
        }
        if ($symbol == "TRUE") {
          $xkcdpassword .= $symbols[rand(0,5)];
        }
      }
        return view('tools.xkcdpassword', ['error' => $error, 'xkcdpassword' => $xkcdpassword]);
    }

    /**
    * Responds to requests to GET /loremipsum
    */
    public function getLoremIpsum() {
        return view('tools.loremipsum', ['error' => '']);
    }

    /**
     * Responds to requests to POST /loremipsum
     */
    public function postLoremIpsum(Request $request) {
        return 'Process adding new book';
    }

    /**
    * Responds to requests to GET /loremipsum
    */
    public function getRandomUser() {
        return view('tools.randomuser', ['error' => '']);
    }

    /**
     * Responds to requests to POST /randomuser
     */
    public function postRandomUser(Request $request) {
        return 'Process adding new book';
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    public function getShow($id) {
        return 'Show book: '.$id;
    }

    /**
     * Responds to requests to GET /books/create
     */
    public function getCreate() {
        return 'Form to create a new book';
    }

    /**
     * Responds to requests to POST /books/create
     */
    public function postCreate() {
        return 'Process adding new book';
    }
}
