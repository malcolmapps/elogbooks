<?php

// src/AppBundle/Controller/CountdownController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class CountdownController extends Controller {


    /**
     * @Route("/countdown/")
     */
    public function newAction(Request $request) {
	$defaults = array('target' => 532, 'files' => true, "enctype" => "multipart/form-data");
	$solutionList = array();

	$form = $this->createFormBuilder($defaults, array())
		->add('target', TextType::class)
		->add('numbersFile', FileType::class)
		->getForm();

	$form->handleRequest($request);

	if ($form->isValid()) {
	    $target = $file = $form->get('target')->getData();
	    $file = $form->get('numbersFile')->getData();
	    $dir = '/tmp/';
	    $name = $file->getClientOriginalName();
	    $file->move($dir, $name);
	    $numbers = fgetcsv(fopen($dir . $name, 'r'));
	    $solution = new CountdownSolver($target, $numbers);
	    $solutionList = $solution->getAnswer();
	    $solutionList[] = sprintf("Numbers %s", implode(',', $numbers));
	}

	return $this->render('Countdown/index.html.twig', array('form' => $form->createView(), 'solutionList' => $solutionList));
    }

}


/*
 * Logic for the Countdown solver is derived from the C code written by
 *  James Stanley at jez.xxx
 *
 * https://github.com/jes/cntdn.git
 *
 * The old/ directory contains various bits of python, perl and C.
 *
 */

define('DIV', 0);
define('MUL', 1);
define('ADD', 2);
define('SUB', 3);


class CountdownSolver {

    private $numberList;
    private $used = array();
    private $target;
    private $finalAnswer = array();


    public function __construct($target, $numbers) {
	$this->target = $target;
	$this->numberList = $numbers;

	for ($x = 1; $x <= 6; $x++) {
	    if (!$this->findAnswer($x, 0)) {
		continue;
	    }
	}
    }


    public function getAnswer() {
	krsort($this->finalAnswer);
	if(sizeOf($this->finalAnswer) == 0) {
    	    $this->finalAnswer[] = "No solution";
	}
	return $this->finalAnswer;
    }


    private function findAnswer($numbers, $answer) {
	$numbers--;
	if ($numbers == -1) {
	    return false;
	}

	for ($i = 0; $i < 5; $i++) {
	    if (empty($this->used[$i])) {
		for ($j = 0; $j < 4; $j++) {
		    switch ($j) {
			case DIV:
			    $myans = $answer;
			    if ($this->numberList[$i] != 0) {
				if (($myans % $this->numberList[$i]) == 0) {
				    $myans /= $this->numberList[$i];
				    $this->used[$i] = 1;
				    if ($myans == $this->target) {
					if ($answer != 0) {
					    $this->finalAnswer[] = sprintf("%d / %d = %d", $answer, $this->numberList[$i], $myans);
					}
					return true;
				    }
				    if ($this->findAnswer($numbers, $myans)) {
					if ($answer != 0) {
					    $this->finalAnswer[] = sprintf("%d / %d = %d", $answer, $this->numberList[$i], $myans);
					}
					return true;
				    }
				}
				$this->used[$i] = 0;
			    }
			    break;

			case MUL:
			    $myans = $answer;
			    $myans *= $this->numberList[$i];
			    $this->used[$i] = 1;
			    if ($myans == $this->target) {
				if ($answer != 0) {
				    $this->finalAnswer[] = sprintf("%d * %d = %d", $answer, $this->numberList[$i], $myans);
				}
				return true;
			    }
			    if ($this->findAnswer($numbers, $myans)) {
				if ($answer != 0) {
				    $this->finalAnswer[] = sprintf("%d * %d = %d", $answer, $this->numberList[$i], $myans);
				}
				return true;
			    }
			    $this->used[$i] = 0;
			    break;

			case ADD:
			    $myans = $answer;
			    $myans += $this->numberList[$i];
			    $this->used[$i] = 1;
			    if ($myans == $this->target) {
				if ($answer != 0) {
				    $this->finalAnswer[] = sprintf("%d + %d = %d", $answer, $this->numberList[$i], $myans);
				}
				return true;
			    }
			    if ($this->findAnswer($numbers, $myans)) {
				if ($answer != 0) {
				    $this->finalAnswer[] = sprintf("%d + %d = %d", $answer, $this->numberList[$i], $myans);
				}
				return true;
			    }
			    $this->used[$i] = 0;
			    break;

			case SUB:
			    $myans = $answer;
			    $myans -= $this->numberList[$i];
			    $this->used[$i] = 1;
			    if ($myans == $this->target) {
				if ($answer != 0) {
				    $this->finalAnswer[] = sprintf("%d - %d = %d", $answer, $this->numberList[$i], $myans);
				}
				return true;
			    }
			    if ($this->findAnswer($numbers, $myans)) {
				if ($answer != 0) {
				    $this->finalAnswer[] = sprintf("%d - %d = %d", $answer, $this->numberList[$i], $myans);
				}
				return true;
			    }
			    $this->used[$i] = 0;
			    break;
		    }
		}
	    }
	}
	return false;
    }

}
