// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
jQuery('button.main-modal-submit').click(function() {
  var data_header = jQuery(this).data('header');
  jQuery('.form-wrapper-main-modal .modal-zag3').text(data_header);
});

// jquery.maskedinput.min.js
(function(e) {
  function t() {
    var e = document.createElement("input"),
      t = "onpaste";
    return e.setAttribute(t, ""), "function" == typeof e[t] ? "paste" : "input"
  }
  var n, a = t() + ".mask",
    r = navigator.userAgent,
    i = /iphone/i.test(r),
    o = /android/i.test(r);
  e.mask = {
    definitions: {
      9: "[0-9]",
      a: "[A-Za-z]",
      "*": "[A-Za-z0-9]"
    },
    dataName: "rawMaskFn",
    placeholder: "_"
  }, e.fn.extend({
    caret: function(e, t) {
      var n;
      if (0 !== this.length && !this.is(":hidden")) return "number" == typeof e ? (t = "number" == typeof t ? t : e, this.each(function() {
        this.setSelectionRange ? this.setSelectionRange(e, t) : this.createTextRange && (n = this.createTextRange(), n.collapse(!0), n.moveEnd("character", t), n.moveStart("character", e), n.select())
      })) : (this[0].setSelectionRange ? (e = this[0].selectionStart, t = this[0].selectionEnd) : document.selection && document.selection.createRange && (n = document.selection.createRange(), e = 0 - n.duplicate().moveStart("character", -1e5), t = e + n.text.length), {
        begin: e,
        end: t
      })
    },
    unmask: function() {
      return this.trigger("unmask")
    },
    mask: function(t, r) {
      var c, l, s, u, f, h;
      return !t && this.length > 0 ? (c = e(this[0]), c.data(e.mask.dataName)()) : (r = e.extend({
        placeholder: e.mask.placeholder,
        completed: null
      }, r), l = e.mask.definitions, s = [], u = h = t.length, f = null, e.each(t.split(""), function(e, t) {
        "?" == t ? (h--, u = e) : l[t] ? (s.push(RegExp(l[t])), null === f && (f = s.length - 1)) : s.push(null)
      }), this.trigger("unmask").each(function() {
        function c(e) {
          for (; h > ++e && !s[e];);
          return e
        }

        function d(e) {
          for (; --e >= 0 && !s[e];);
          return e
        }

        function m(e, t) {
          var n, a;
          if (!(0 > e)) {
            for (n = e, a = c(t); h > n; n++)
              if (s[n]) {
                if (!(h > a && s[n].test(R[a]))) break;
                R[n] = R[a], R[a] = r.placeholder, a = c(a)
              }
            b(), x.caret(Math.max(f, e))
          }
        }

        function p(e) {
          var t, n, a, i;
          for (t = e, n = r.placeholder; h > t; t++)
            if (s[t]) {
              if (a = c(t), i = R[t], R[t] = n, !(h > a && s[a].test(i))) break;
              n = i
            }
        }

        function g(e) {
          var t, n, a, r = e.which;
          8 === r || 46 === r || i && 127 === r ? (t = x.caret(), n = t.begin, a = t.end, 0 === a - n && (n = 46 !== r ? d(n) : a = c(n - 1), a = 46 === r ? c(a) : a), k(n, a), m(n, a - 1), e.preventDefault()) : 27 == r && (x.val(S), x.caret(0, y()), e.preventDefault())
        }

        function v(t) {
          var n, a, i, l = t.which,
            u = x.caret();
          t.ctrlKey || t.altKey || t.metaKey || 32 > l || l && (0 !== u.end - u.begin && (k(u.begin, u.end), m(u.begin, u.end - 1)), n = c(u.begin - 1), h > n && (a = String.fromCharCode(l), s[n].test(a) && (p(n), R[n] = a, b(), i = c(n), o ? setTimeout(e.proxy(e.fn.caret, x, i), 0) : x.caret(i), r.completed && i >= h && r.completed.call(x))), t.preventDefault())
        }

        function k(e, t) {
          var n;
          for (n = e; t > n && h > n; n++) s[n] && (R[n] = r.placeholder)
        }

        function b() {
          x.val(R.join(""))
        }

        function y(e) {
          var t, n, a = x.val(),
            i = -1;
          for (t = 0, pos = 0; h > t; t++)
            if (s[t]) {
              for (R[t] = r.placeholder; pos++ < a.length;)
                if (n = a.charAt(pos - 1), s[t].test(n)) {
                  R[t] = n, i = t;
                  break
                }
              if (pos > a.length) break
            } else R[t] === a.charAt(pos) && t !== u && (pos++, i = t);
          return e ? b() : u > i + 1 ? (x.val(""), k(0, h)) : (b(), x.val(x.val().substring(0, i + 1))), u ? t : f
        }
        var x = e(this),
          R = e.map(t.split(""), function(e) {
            return "?" != e ? l[e] ? r.placeholder : e : void 0
          }),
          S = x.val();
        x.data(e.mask.dataName, function() {
          return e.map(R, function(e, t) {
            return s[t] && e != r.placeholder ? e : null
          }).join("")
        }), x.attr("readonly") || x.one("unmask", function() {
          x.unbind(".mask").removeData(e.mask.dataName)
        }).bind("focus.mask", function() {
          clearTimeout(n);
          var e;
          S = x.val(), e = y(), n = setTimeout(function() {
            b(), e == t.length ? x.caret(0, e) : x.caret(e)
          }, 10)
        }).bind("blur.mask", function() {
          y(), x.val() != S && x.change()
        }).bind("keydown.mask", g).bind("keypress.mask", v).bind(a, function() {
          setTimeout(function() {
            var e = y(!0);
            x.caret(e), r.completed && e == x.val().length && r.completed.call(x)
          }, 0)
        }), y()
      }))
    }
  })
})(jQuery);
jQuery(document).ready(function($) {

  /*Вызов модельного окна*/
  var data_form = "";
  $('.main-modal-submit').click(function() {
    data_form = $(this).attr('data-form');
    var scroll_html_h = $('html').outerHeight();
    var hv = $(window).height();
    $('.form-wrapper-main-modal[data-form=' + data_form + ']').css('display', 'block');
    if (scroll_html_h > hv) {
      var style_h = '17px';
    } else {
      var style_h = '0px';
    }
    $('body').css({
      'overflow': 'hidden',
      'padding-right': style_h
    });
    $(document).bind('click.myEvent', function(e) {
      if ($(e.target).closest('.form-wrapper-main-modal[data-form=' + data_form + '] .main-modal-block-form').length == 0) {
        $('.form-wrapper-main-modal[data-form=' + data_form + ']').css('display', 'none');
        $('body').removeAttr('style');
        $(document).unbind('click.myEvent');
      }
    });
    return false;
  });
  $('.main-modal-gift-submit').click(function() {
    data_form = $(this).attr('data-form');
    var scroll_html_h = $('html').outerHeight();
    var hv = $(window).height();
    $('.form-wrapper-main-modal[data-form=' + data_form + ']').css('display', 'block');
    if (scroll_html_h > hv) {
      var style_h = '17px';
    } else {
      var style_h = '0px';
    }
    $('body').css({
      'overflow': 'hidden',
      'padding-right': style_h
    });
    var brand = $(this).attr('brd');
    var zag = "Вызовите мастера и получите подарок!";

    $('.modal-zag').html(zag);
    $('.inpbr').val(brand);
    $(document).bind('click.myEvent', function(e) {
      if ($(e.target).closest('.form-wrapper-main-modal[data-form=' + data_form + '] .main-modal-block-form').length == 0) {
        $('.form-wrapper-main-modal[data-form=' + data_form + ']').css('display', 'none');
        $('body').removeAttr('style');
        $(document).unbind('click.myEvent');
      }
    });
    return false;
  });

  $('.main-modal-brand-submit').click(function() {
    data_form = $(this).attr('data-form');
    var scroll_html_h = $('html').outerHeight();
    var hv = $(window).height();
    $('.form-wrapper-main-modal[data-form=' + data_form + ']').css('display', 'block');
    if (scroll_html_h > hv) {
      var style_h = '17px';
    } else {
      var style_h = '0px';
    }
    $('body').css({
      'overflow': 'hidden',
      'padding-right': style_h
    });
    var brand = $(this).attr('brd');
    var zag = "Заявка на ремонт стиральной машины " + brand;

    $('.modal-zag').html(zag);
    $('.inpbr').val(brand);
    $(document).bind('click.myEvent', function(e) {
      if ($(e.target).closest('.form-wrapper-main-modal[data-form=' + data_form + '] .main-modal-block-form').length == 0) {
        $('.form-wrapper-main-modal[data-form=' + data_form + ']').css('display', 'none');
        $('body').removeAttr('style');
        $(document).unbind('click.myEvent');
      }
    });
    return false;
  });
  $('body').on('click', '.modal-close', function() {
    $('.form-wrapper-main-modal[data-form=' + data_form + ']').css('display', 'none');
    $('body').removeAttr('style');
    return false;
  });

  return false;
});
jQuery(document).ready(function($) {
  $('body').wrapInner('<div class="wrap-body"></div>');
  $("#yphone").mask("+375 (99) 999-99-99");
  $("#yphoneiii").mask("+375 (99) 999-99-99");
  $("#yphone2").mask("+375 (99) 999-99-99");
  $(".ytel").mask("+375 (99) 999-99-99");
});
