jQuery((function(e){e(document).on("change",".sp-pagebuilder-control-padding",(function(a){var o="",s=e(this);e(this).closest(".sp-pagebuilder-paddings-list").find(">div").each((function(a){o+=e(this).find(".sp-pagebuilder-control-padding").val()+" "})),s.closest(".sp-pagebuilder-paddings-list").prev().val(e.trim(o))})),e(document).on("change",".sp-pagebuilder-control-margin",(function(a){var o="",s=e(this);e(this).closest(".sp-pagebuilder-margins-list").find(">div").each((function(a){o+=e(this).find(".sp-pagebuilder-control-margin").val()+" "})),s.closest(".sp-pagebuilder-margins-list").prev().val(e.trim(o))})),e(document).on("click",".sp-pagebuilder-btn-clear-media",(function(a){a.preventDefault();var o=e(this);o.siblings(".sp-pagebuilder-media-preview").addClass("sp-pagebuilder-media-no-image").removeAttr("src"),o.siblings("input").val("")}));var a={};e.fn.openPopupAlt=function(){e("#page-options").addClass("sp-pagebuilder-modal-overlay-after-open"),e("#page-options").find(".sp-pagebuilder-modal-content").addClass("sp-pagebuilder-modal-content-after-open"),e("body").addClass("sp-pagebuilder-modal-open"),e(".sp-pagebuilder-modal-alt .form-group").find(">input,>textarea,>select").each((function(){a[e(this).attr("id")]=e(this).val()}))},e.fn.closePopupAlt=function(o){var s=e.extend({reset:!1},o);return e("#page-options").addClass("sp-pagebuilder-modal-overlay-before-close"),e("#page-options").find(".sp-pagebuilder-modal-content").addClass("sp-pagebuilder-modal-content-before-close"),e("#page-options").removeClass("sp-pagebuilder-modal-overlay-before-close sp-pagebuilder-modal-overlay-after-open"),e("#page-options").find(".sp-pagebuilder-modal-content").removeClass("sp-pagebuilder-modal-content-before-close sp-pagebuilder-modal-content-after-open"),e("body").removeClass("sp-pagebuilder-modal-open"),s.reset&&e(".sp-pagebuilder-modal-alt .form-group").find(">input,>textarea,>select").each((function(){e(this).val(a[e(this).attr("id")]),"jform_og_image"==e(this).attr("id")&&""!=a[e(this).attr("id")]&&e(this).prev(".sppb-media-preview").removeClass("no-image").attr("src",pagebuilder_base+a[e(this).attr("id")])})),this},e("#btn-page-options").on("click",(function(a){a.preventDefault(),e().openPopupAlt()})),e(document).on("click",".sp-pagebuilder-modal-alt .sp-pagebuilder-modal-content-after-open",(function(a){a.target===this&&e().closePopupAlt({reset:!0})})),e(document).on("click","#btn-cancel-page-options",(function(a){a.preventDefault(),e().closePopupAlt({reset:!0})})),e(document).on("click","#btn-apply-page-options",(function(a){e().closePopupAlt()})),e(document).on("click",".sp-pagebuilder-fa-list-icon",(function(a){a.preventDefault();var o=e(this),s=o.closest(".sp-pagebuilder-fontawesome-icon-chooser");e(this).closest("ul").find(">li").removeClass("active"),o.addClass("active"),s.find(".sp-pagebuilder-fontawesome-icon-input>span").html('<i class="fa '+o.data("fontawesome_icon")+'"></i> '+o.data("fontawesome_icon_name")),s.find(".sp-pagebuilder-addon-input-fa").val(o.data("fontawesome_icon_name")),s.addClass("sp-pagebuilder-has-fa-icon").removeClass("open")})),e(document).on("keyup",'.sp-pagebuilder-fontawesome-dropdown input[type="text"]',(function(){var a=e(this).val(),o=new RegExp(".*?"+a+".*?","i");e(this).next(".sp-pagebuilder-fontawesome-icons").children().each((function(){var a=o.test(e("span",this).text());e(this).toggle(a)}))})),e(document).on("click",".sp-pagebuilder-remove-fa-icon",(function(a){a.stopPropagation(),a.preventDefault();var o=e(this).closest(".sp-pagebuilder-fontawesome-icon-chooser");o.removeClass("sp-pagebuilder-has-fa-icon"),o.find(".sp-pagebuilder-fontawesome-icon-input>span").html("--"+Joomla.JText._("COM_SPPAGEBUILDER_ADDON_ICON_SELECT")+"--"),o.find(".sp-pagebuilder-fontawesome-icons>li").removeClass("active"),o.find(".sp-pagebuilder-addon-input-fa").val("")})),e(".com_sppagebuilder #sp-pagebuilder-page-tools").length>0&&e(window).on("scroll",(function(){if(e(window).scrollTop()>220){var a=e(".com_sppagebuilder #sp-pagebuilder-page-tools > div");e(".com_sppagebuilder #sp-pagebuilder-page-tools").addClass("fixed-sp-page-tools"),e(".com_sppagebuilder #sp-pagebuilder-page-tools").css({height:a.outerHeight()})}else e(".com_sppagebuilder #sp-pagebuilder-page-tools").removeClass("fixed-sp-page-tools"),e(".com_sppagebuilder #sp-pagebuilder-page-tools").css({height:"auto"})}))}));