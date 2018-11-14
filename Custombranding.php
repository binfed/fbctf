<?hh // strict
class :custombranding extends :x:element {
  category %flow;
  attribute string brandingText, string brandingLogo;
  protected string $tagName = 'custombranding';
  protected function render(): XHPRoot {
    return
      <span class="branding-el">
        <img class="icon-badge" src={$this->:brandingLogo} />
        <br />
        <span class="icon-text">{$this->:brandingText}<br />汉化由Sp4ce和MuTou提供</span>
      </span>
      ;
  }
}
