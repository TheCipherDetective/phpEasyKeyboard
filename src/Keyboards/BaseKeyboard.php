<?php

namespace TheCipherDetective\Telegram\Keyboards;


abstract class BaseKeyboard {
    protected array $buttons = [];
    protected int $colIndex = 0;  
    protected int $maxRows = 8;   
    protected int $rowIndex = 0;  
    protected int $maxColumns = 4;    
    protected int $totalButtonsCount = 0;

    /**
     * Set max rows and columns count
     * The total buttons are determined by: rows × columns.
     * Note: If the total exceeds 100, the buttons are automatically paginated.
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

    public function isReachedTheMaxButtons(): bool {
        return $this->totalButtonsCount > 100;
    }

}