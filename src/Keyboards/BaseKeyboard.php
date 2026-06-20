<?php

namespace TheCipherDetective\Telegram\Keyboards;


abstract class BaseKeyboard {
    protected array $buttons = [];
    protected int $colIndex = 0;  
    protected int $rowIndex = 0;  
    protected int $maxRows = 8;   
    protected int $maxColumns = 4;    
    protected int $totalButtonsCount = 0;
    protected int $maxButtonCount = 100;

    /**
     * Set max rows and columns count
     * The total buttons are determined by: rows × columns.
     * Note: If the total exceeds 100
     * Note: The recommended column count is 4.
     *
     * @param int $maxColumns
     * @param int $maxRows
     */
    public function __construct(int $maxColumns = 4, int $maxRows = 8) {
        $this->maxColumns = $maxColumns;
        $this->maxRows = $maxRows;
    }

    public function getRowIndex() {
        return $this->rowIndex;
    }

    public function getColIndex() {
        return $this->colIndex;
    }

    public function getMaxRowsCount() {
        return $this->maxRows;
    }

    public function getMaxColumns(){
        return $this->maxColumns;
    }

    public function getButtons(): array
    {
        return $this->buttons;
    }

    public function isTooManyButtons(): bool {
        return $this->getTotalButtonsCount() > $this->getMaxButtonCount();
    }

    public function setColIndex(int $colIndex)
    {
        $this->colIndex = $colIndex;
    }

    public function setRowIndex(int $rowIndex) {
        $this->rowIndex = $rowIndex;
    }

    public function setMaxRows(int $maxRows)
    {
        $this->maxRows = $maxRows;
    }

    public function setMaxColumns(int $maxColumns) {
        $this->maxColumns = $maxColumns;
    }

    public function setTotalButtonsCount(int $totalButtonsCount) {
        $this->totalButtonsCount = $totalButtonsCount;
    }

    public function getTotalButtonsCount() {
        return $this->totalButtonsCount;
    }

    public function getMaxButtonCount()
    {
        return $this->maxButtonCount;
    }

    public function setMaxButtonCount(int $maxButtonCount){
        $this->maxButtonCount = $maxButtonCount;
    }

    public function addRow() {
        
        $rowIndex = $this->getRowIndex();

        if ($rowIndex + 1 < $this->maxRows) {
            $colIndex = $this->getColIndex();
            if ($colIndex > 0) {
                $this->setColIndex(0);
                $this->setRowIndex(++$rowIndex);
            }
        }
        return $this;
    }

}