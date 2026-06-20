<?php

namespace TheCipherDetective\Telegram\Keyboards;


class InlineKeyboard extends BaseKeyboard {

      public function addButton( array $buttonData  ) 
      {
         
        if ( $this->isTooManyButtons() ) return $this;

        if ( $this->getColIndex() + 1 > $this->getMaxColumns() ) $this->addRow();  
        
        if ( ($this->getRowIndex() + 1) < $this->getMaxRowsCount() ) 
        {
          $this->$buttons[ $this->getRowIndex() ][$this->getColIndex()] = $buttonData;
        }
        
        return $this;
          
      }     

}       