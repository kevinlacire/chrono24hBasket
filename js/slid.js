$(document).ready(function () {
  s = new slider("#galerie");
});

var slider = function (id)
{
  self = this;
  this.div = $(id);

  this.article_price = this.div.find(".article_price");
  this.slid = this.div.find(".slid");
  this.prev = this.div.find(".prev");
  this.next = this.div.find(".next");

  this.next.click(function ()
  {
    if (self.slid.css('left') != '-1800px')
      self.slid.animate({
        left: '+=' + -300
      }, 500);
  });

  this.prev.click(function ()
  {
    if (self.slid.css('left') != '0px')
      self.slid.animate({
        left: '-=' + -300
      }, 500);
  });

};