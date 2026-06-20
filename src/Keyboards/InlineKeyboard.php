<?php

namespace TheCipherDetective\Telegram\Keyboards;

class buttonStyle {
  public const none = "";
  public const blue = "primary";
  public const green = "success";
  public const red = "danger";

}


class InlineKeyboard extends BaseKeyboard {

      public function addButton( array $buttonData  ) 
      {
        if ( !isset($buttonData['text']) ) {
           throw new \Exception('Button must have text');
        }
         
        if ( $this->isTooManyButtons() ) return $this;

        if ( $this->getColIndex() + 1 > $this->getMaxColumns() ) $this->addRow();  
                
        if ( ($this->getRowIndex() + 1) < $this->getMaxRowsCount() ) 
        {
          $colIndex = $this->getColIndex();
          $this->buttons[ $this->getRowIndex() ][$this->getColIndex()] = $buttonData;
          $this->setColIndex($colIndex + 1 );
        }
        return $this; 
      }


      public function prepareData( array $data) {
          $valid_data = array();
          foreach ($data as $key => $value) {
            if ($value !== null or $value !== "") $valid_data[ $key ] = $value;
          }
         $this->addButton( $valid_data );
      }

      public function createCallbackButton( $text, $callnack_data , string $style = buttonStyle::none , $icon_custom_emoji_id = '' ) {
          if ( \strlen($callnack_data) > 64 ) {
              throw new \Exception("BUTTON_DATA_INVALID : The length of Data to be sent in a callback query mube be 1-64 bytes");
          }
          $params = compact("text","callnack_data","style","icon_custom_emoji_id");
          $this->prepareData( $params);
          return $this;
      }

      public function createUrlButton(string $text , string $url , string $style = buttonStyle::none , $icon_custom_emoji_id = '') {
          $params = compact("text","url","style","icon_custom_emoji_id");
          $this->prepareData( $params);
          return $this;
      }
      
      public function createWebAppButton($text, $web_app , string $style = buttonStyle::none , $icon_custom_emoji_id = '') {
          $params = compact('text','web_app','style','icon_custom_emoji_id');
          $this->prepareData( $params);
          return $this;
      }

      public function creatLoginUrlButton(string $text,array $login_url,string $style = buttonStyle::none , $icon_custom_emoji_id = '') {
          $params = compact('text','login_url','style','icon_custom_emoji_id');
          $this->prepareData( $params);
          return $this;
      }

      public function creatSwitchInlineQuery( string $text , string $switch_inline_query , $style = buttonStyle::none , $icon_custom_emoji_id = '') {
          $params = compact('text','switch_inline_query','style','icon_custom_emoji_id');
          $this->prepareData( $params);
          return $this;
      }

      public function creatSwitchInlineQueryCurrentChat( string $text , string $switch_inline_query_current_chat , $style = buttonStyle::none , $icon_custom_emoji_id = '') {
          $params = compact('text','switch_inline_query_current_chat','style','icon_custom_emoji_id');
          $this->prepareData( $params);
          return $this;
      }

      public function creatSwitchInlineQueryChosenChat( string $text , string $switch_inline_query_chosen_chat , $style = buttonStyle::none , $icon_custom_emoji_id = '') {
          $params = compact('text','switch_inline_query_chosen_chat','style','icon_custom_emoji_id');
          $this->prepareData( $params);
          return $this;
      }

      public function createCopyButton( string $text , string $copy_text , $style = buttonStyle::none , $icon_custom_emoji_id = '') {
          $params = compact('text','copy_text','style','icon_custom_emoji_id');
          $this->prepareData( $params);
          return $this;
      }

      public function createCallbackGame( string $text , string $callback_game , $style = buttonStyle::none , $icon_custom_emoji_id = '') {
          $params = compact('text','callback_game','style','icon_custom_emoji_id');
          $this->prepareData( $params);
          return $this;
      }

      public function createPayButton( string $text , string $pay , $style = buttonStyle::none , $icon_custom_emoji_id = '') {
          $params = compact('text','pay','style','icon_custom_emoji_id');
          $this->prepareData( $params);
          return $this;
      }

}       