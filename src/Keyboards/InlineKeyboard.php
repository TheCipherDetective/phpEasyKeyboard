<?php

namespace TheCipherDetective\PhpEasyKeyboard\Keyboards;

use TheCipherDetective\PhpEasyKeyboard\Constants\ButtonStyle;


class InlineKeyboard extends BaseKeyboard
{

  
  public function createCallbackButton($text, $callback_data, string $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    if (\strlen($callback_data) > 64) {
      throw new \Exception("BUTTON_DATA_INVALID : The length of Data to be sent in a callback query must be 1-64 bytes");
    }
    $params = compact("text", "callback_data", "style", "icon_custom_emoji_id");
    $this->prepareData($params);
    return $this;
  }

  public function createUrlButton(string $text, string $url, string $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    $params = compact("text", "url", "style", "icon_custom_emoji_id");
    $this->prepareData($params);
    return $this;
  }

  public function createWebAppButton($text, $web_app, string $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    $params = compact('text', 'web_app', 'style', 'icon_custom_emoji_id');
    $this->prepareData($params);
    return $this;
  }

  public function createLoginUrlButton(string $text, array $login_url, string $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    $params = compact('text', 'login_url', 'style', 'icon_custom_emoji_id');
    $this->prepareData($params);
    return $this;
  }

  public function createSwitchInlineQuery(string $text, string $switch_inline_query, $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    $params = compact('text', 'switch_inline_query', 'style', 'icon_custom_emoji_id');
    $this->prepareData($params);
    return $this;
  }

  public function createSwitchInlineQueryCurrentChat(string $text, string $switch_inline_query_current_chat, $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    $params = compact('text', 'switch_inline_query_current_chat', 'style', 'icon_custom_emoji_id');
    $this->prepareData($params);
    return $this;
  }

  public function createSwitchInlineQueryChosenChat(string $text, string $switch_inline_query_chosen_chat, $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    $params = compact('text', 'switch_inline_query_chosen_chat', 'style', 'icon_custom_emoji_id');
    $this->prepareData($params);
    return $this;
  }

  public function createCopyButton(string $text, string $copy_text, $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    $params = compact('text', 'copy_text', 'style', 'icon_custom_emoji_id');
    $this->prepareData($params);
    return $this;
  }

  public function createCallbackGame(string $text, string $callback_game, $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    $params = compact('text', 'callback_game', 'style', 'icon_custom_emoji_id');
    $this->prepareData($params);
    return $this;
  }

  public function createPayButton(string $text, string $pay, $style = ButtonStyle::NONE, $icon_custom_emoji_id = '')
  {
    $params = compact('text', 'pay', 'style', 'icon_custom_emoji_id');
    $this->prepareData($params);
    return $this;
  }

  public function getInlineKeyboard()
  {
    return [
      'inline_keyboard' => $this->getButtons()
    ];
  }

  public function getInlineKeyboardAsJson()
  {
    return \json_encode($this->getInlineKeyboard());
  }

}