<?php

namespace TheCipherDetective\Telegram\Keyboards;

use TheCipherDetective\Telegram\Constants\ButtonStyle;

class ReplyKeyboard extends BaseKeyboard
{
    private $is_presstent = false;
    private $resize_keyboard = false;
    private $one_time_keyboard = false;
    private $input_field_placeholder = false;
    private $selective = false;
    public function __construct(int $maxColumns = 4, int $maxRows = 8, $is_persistent = false, bool $resize_keyboard = false, bool $one_time_keyboard = false, string $input_field_placeholder = "", bool $selective = false)
    {
        parent::__construct($maxColumns, $maxRows);
        $this->is_presstent = $is_persistent;
        $this->resize_keyboard = $resize_keyboard;
        $this->one_time_keyboard = $one_time_keyboard;
        $this->input_field_placeholder = $input_field_placeholder;
        $this->selective = $selective;
    }

    public function setIsPresstent(bool $is_presstent): self {
        $this->is_presstent = $is_presstent;
        return $this;
    }

    public function setResizeKeyboard(bool $resize_keyboard): self
    {
        $this->resize_keyboard = $resize_keyboard;
        return $this;
    }

    public function setOneTimeKeyboard(bool $one_time_keyboard): self
    {
        $this->one_time_keyboard = $one_time_keyboard;
        return $this;
    }

    public function setPlaceholder(string $placeholder): self
    {
        $this->input_field_placeholder = $placeholder;
        return $this;
    }

    public function setSelective(bool $selective): self
    {
        $this->selective = $selective;
        return $this;
    }

    public function createTextButton($text , string $style = ButtonStyle::NONE , string $icon_custom_emoji_id = '' ) {
        $params = compact('text','style','icon_custom_emoji_id');
        $this->prepareData($params);
        return $this;
    }

    
}