<?php

/**
 * Contains drawingAssistant class which will consist of some core fucntions to 
 * perform basic calculations and assist drawing of the FIFA WC finale teams tabular structure 
 * 
 * @author Richa Sharma <richa.achiever@gmail.com>
 * @since  16 July 2014  
 */  
class drawingAssistant
{

    /**
     * Some constants used in the drawings
     @###%**/
     const PLUS_SIGN = '+';
     const MINUS_SIGN = '-';
     const PIPE_SIGN = '|';
     const CARRIGE_RETURN = "\r\n";
     /*@###%**/
              
    /**
     * Static variable to retain value of the attribute/key which will aid us getting max lenght of each attribute values.    
     * @var string $sAttribute attribute value retained
     */          
    protected static $sAttribute = null;
    
    /**
     * Static variable to retain value of the team details which will aid us further processing over the details.    
     * @var array $arrTeamDetails team details retained
     */
    protected static $arrTeamDetails = array();
    
    /**
     * Static variable to retain value of the team attributes with the maximum lenght they may possess.     
     * @var array $arrAttribWithMaxLenght attributes with the maximum lenght they may possess
     */
    protected static $arrAttribWithMaxLenght = array();

    /**
     * setTeamDetails function is simple setter helper function which sets up the team details for any further 
     * processings in the class      
     *  
     * @param Array $arrTeamDetails details of the FIFA finale teams
     *      
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return void            
     */ 
    public function setTeamDetails(array $arrTeamDetails)
    {
        self::$arrTeamDetails = $arrTeamDetails;
    }

    /**
     * setAttributesWithMaxLenght function is simple setter helper function which sets up the attributes with
     * the maximum lenght they may possess. 
     *  
     * @param Array $arrTeamDetails details of the FIFA finale teams
     *      
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return void            
     */ 
    public function setAttributesWithMaxLenght(array $arrAttribWithMaxLenght)
    {
        self::$arrAttribWithMaxLenght = $arrAttribWithMaxLenght;
    }
    
    /**
     * drawDiscriminator function basically draws us the discriminator line which separates
     * header row to other rows; acts as footer line and header line     
     *  
     * @param Array $arrAttribWithMaxLenght attributes with the max lenght
     *      
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return void            
     */ 
    public function drawDiscriminator()
    {
        $arrAttribWithMaxLenght = $this->getAttributesWithMaxLenght();
        foreach($arrAttribWithMaxLenght as $sAttribute => $ilenght) {
            echo self::PLUS_SIGN . str_repeat(self::MINUS_SIGN, $ilenght + 2);
        }
        echo self::PLUS_SIGN;
    }
    
    /**
     * drawRows function draws us the rows in tabular structure with the values being 
     * populated from the team details we have. 
     *  
     * ToDo we shall provide indentation as a param to drawRows so that the attribute values 
     * can be indented as per the indentation style; this will help coloring the rows and providing
     * different indentations to header rows 
     *          
     * @param Array $arrAttribWithMaxLenght attributes with the max lenght
     *      
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return void            
     */ 
    public function drawRows()
    {
        $arrTeamDetails = $this->getTeamDetails();
        array_map(array($this, 'drawRow'), $arrTeamDetails);
        echo self::CARRIGE_RETURN;
    }
    
    public function drawHeaderRow()
    {
        $arrAttributesWithMaxLenght = $this->getAttributesWithMaxLenght();
        echo self::CARRIGE_RETURN;
        foreach($arrAttributesWithMaxLenght as $sAttribute => $iLenght) {
            echo self::PIPE_SIGN . '  ' . $sAttribute;
            echo str_repeat(' ', $iLenght - strlen($sAttribute));
        }
        echo self::PIPE_SIGN;
        echo self::CARRIGE_RETURN;
    }

    /**
     * calculateMaxLengthOfAttribute function calculates lenght of the biggest value of each attribute provided. 
     *  
     * @param Array $arrTeamDetails details of the FIFA finale teams
     * @param String $sAttributeName attribute name
     *      
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return integer length of the longest attribute            
     */ 
    public function getMaxLengthOfAttributeInArray($sAttributeName)
    {
        self::$sAttribute = $sAttributeName;
        $arrTeamDetails = $this->getTeamDetails();
        $iMaxlen = max(array_map(array($this, 'lenAttrib'), $arrTeamDetails));
        return $iMaxlen;
    }

    /**
     * drawRow function is a helper method to aid drawing rows of table
     *  
     * @param Array $arrTeamDetails details of the FIFA finale teams
     *      
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return integer lenght of the longest attribute            
     */
    protected function drawRow($arrTeamDetails) 
    {
        $arrAttribWithMaxLenght = $this->getAttributesWithMaxLenght();
        krsort($arrTeamDetails);
        echo self::CARRIGE_RETURN;
        foreach($arrTeamDetails as $sAttribute => $sValue) {
            echo self::PIPE_SIGN . ' ' . $sValue;
            echo str_repeat(' ', $arrAttribWithMaxLenght[$sAttribute] - strlen($sValue) + 1);
        }
        echo self::PIPE_SIGN;
    }
    
    /**
     * getTeamDetails function is simple getter helper function which returns the team details set uo for any  
     * processings in the class      
     *  
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return array team details            
     */ 
    protected function getTeamDetails()
    {
        return self::$arrTeamDetails;
    }
    
    /**
     * getAttributesWithMaxLenght function is simple getter helper function which returns the attributes 
     * with maximum lenth they may posess
     *  
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return array attributes with maximum length they may posess.          
     */ 
    protected function getAttributesWithMaxLenght()
    {
        return self::$arrAttribWithMaxLenght;
    }
    
    /**
     * lenAttrib function is a helper method to aid calculating the longest attribute
     *  
     * @param Array $arrTeamDetails details of the FIFA finale teams
     * @param String $sAttributeName attribute name
     *      
     * @author Richa Sharma <richa.achiever@gmail.com>
     * @since  16 July 2014
     * 
     * @return integer lenght of the longest attribute            
     */
    protected function lenAttrib($arrTeamDetails) 
    {
        return strlen($arrTeamDetails[self::$sAttribute]);
    }
}
?>
