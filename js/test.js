$(".searBox").hover(
  // マウスが乗ったときの処理
  function(){
    $(this).addClass("active");
    $(this).children(".cBox").addClass("active2");

  },
  // マウスが離れたときの処理
  function(){
    $(this).removeClass("active");
    $(this).children(".cBox").removeClass("active2");
  }
);