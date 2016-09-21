<?php

/**
 * inclusions
 */
include_once('../model/drawingAssistant.php');

/**
 * handleDrawing class to draw a tabular structure with all provided details of
 * FIFA WC finale teams 
 *  
 * All the teams have same attributes and are mandate for each team
 * 
 * Note: Refer readme for checking out the format of table desired.
 *   
 * @author Richa Sharma <richa.achiever@gmail.com>
 * @since  16 July 2014  
 */  
class handleDrawing
{

    /**
     * createFifaTabularStructure function is responsible to draw the desired tabular stucture with the details provided 
     * 
     * We assume here that the details provided have information for atleast 8 validated teams; so no validations.      
     *      
     * @param Array $arrTeamDetails details of the FIFA finale teams
     * 
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return void            
     */ 
    public function createFifaTabularStructure(array $arrTeamDetails)
    {
        $arrAttribWithMaxLenght = array();
        $objDrawingModel = new drawingAssistant();
        //set team details for further processings once for all.
        $objDrawingModel->setTeamDetails($arrTeamDetails);
        //getMaxWidth for each of the attributes; which will be used for determining the width of each column
        //just sorting the array to have keys in an order
        krsort($arrTeamDetails[0]);        
        foreach($arrTeamDetails[0] as $sAttribute => $sValue) {
             $iAttribMaxLenght = $objDrawingModel->getMaxLengthOfAttributeInArray($sAttribute);
             $arrAttribWithMaxLenght[$sAttribute] = $iAttribMaxLenght;
        }  
        //By this time; we are half way done to draw the structure already; so smile :)
        $objDrawingModel->setAttributesWithMaxLenght($arrAttribWithMaxLenght);
        
        $objDrawingModel->drawDiscriminator();
        $objDrawingModel->drawHeaderRow();
        $objDrawingModel->drawDiscriminator();
        //ToDo At a later stage; we shall provide indentation as a param to drawRows so that the attribute values 
        //can be indented as per the indentation style; this will help coloring the rows and providing
        //different indentations to header rows
        $objDrawingModel->drawRows();
        $objDrawingModel->drawDiscriminator();
          
    }        

}

$arrTeams = array(
    array(
        'Country' => 'Brazil',
        'Color' => 'Yellow',
        'Captain' => 'Thiago Silva',
        'Coach' => 'Luiz Felipe Scoller'
    ),
    array(
        'Country' => 'Columbia',
        'Captain' => 'Mario Yepes',
        'Coach' => 'Jose Pekerman',
        'Color' => 'Yellow'
    ),
    array(
        'Captain' => 'Hugo Lloris',
        'Coach' => 'Didier Deschamps',
        'Country' => 'France',
        'Color' => 'Blue',
    ),
    array(
        'Color' => 'White',
        'Country' => 'Germany',
        'Captain' => 'Philipp Lahm',
        'Coach' => 'Joachim Low',
    ),
    array(
        'Captain' => 'Robin van Persie',
        'Coach' => 'Guus Hiddink',
        'Country' => 'Netherlands',
        'Color' => 'Orange',
    ),
    array(
        'Country' => 'Costa Rica',
        'Captain' => 'Bryan Ruiz',
        'Coach' => 'Jorge Luis Pinto',
        'Color' => 'Red'
    ),
    array(
        'Country' => 'Argentina',
        'Color' => 'Blue',
        'Captain' => 'Lionel Messi',
        'Coach' => 'Alejandro Sabel'
    ),
    array(
        'Captain' => 'Vincent Kompany',
        'Coach' => 'Marc Wilmots',
        'Country' => 'Belgium',
        'Color' => 'Red',
    ),
);

$objDrawing = new handleDrawing();
echo "<pre>";
$objDrawing->createFifaTabularStructure($arrTeams);
echo "</pre>";
?>
