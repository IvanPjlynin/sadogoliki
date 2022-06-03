<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";s:20574:"var rowSettings={"type":"content","title":"Section","attr":{"general":{"admin_label":{"type":"text","title":"Admin Label","desc":"Define an admin label for easy identification.","std":""},"separator1":{"type":"separator","title":"Title Options"},"title":{"type":"textarea","title":"Section Title","desc":"Insert a title which will be displayed as the section title. Leave blank if the section does not require any title.","css":"min-height: 80px;","std":""},"heading_selector":{"type":"select","title":"Title HTML Element","desc":"Select Title HTML element from the list","values":{"h1":"h1","h2":"h2","h3":"h3","h4":"h4","h5":"h5","h6":"h6"},"std":"h3","depends":[["title","!=",""]]},"title_fontsize":{"type":"slider","title":"Title Font Size","std":"","depends":[["title","!=",""]],"responsive":true,"max":500},"title_fontweight":{"type":"text","title":"Title Font Weight","std":"","depends":[["title","!=",""]]},"title_text_color":{"type":"color","title":"Title Color","depends":[["title","!=",""]]},"title_margin_top":{"type":"number","title":"Margin Top","placeholder":"10","depends":[["title","!=",""]],"responsive":true},"title_margin_bottom":{"type":"number","title":"Margin Bottom","placeholder":"10","depends":[["title","!=",""]],"responsive":true},"separator2":{"type":"separator","title":"Subtitle Options"},"subtitle":{"type":"textarea","title":"Section subtitle","desc":"Insert a subtitle which will be displayed as the section subtitle. Leave blank if the section does not require any subtitle.","css":"min-height: 120px;"},"subtitle_fontsize":{"type":"slider","title":"Sub Title Font Size","desc":"","responsive":true,"depends":[["subtitle","!=",""]]},"title_position":{"type":"select","title":"Title & Subtitle Position","desc":"Set position for both Title & Subtitle element","values":{"sppb-text-left":"Left","sppb-text-center":"Center","sppb-text-right":"Right"},"std":"sppb-text-center"},"columns_align_center":{"type":"checkbox","title":"Vertical Align","desc":"Set vertical alignment of content in section\/column. To work correctly set the Height of the section.","std":0},"columns_content_alignment":{"type":"select","title":"Content Alignment","desc":"Set the alignment of the contents.","values":{"top":"Top","center":"Center","bottom":"Bottom"},"std":"center","depends":[["columns_align_center","!=",0]]},"fullscreen":{"type":"checkbox","title":"Fluid Row","desc":"Enable this option to make this row fluid. Fluid row will help you publish full width contents like slideshows or Google Maps frames.","std":0},"no_gutter":{"type":"checkbox","title":"Remove Columns Gap","desc":"Enable this option to remove gaps between columns in this row.","std":0},"container_separator":{"type":"separator","title":"Container Style Settings"},"container_width":{"type":"slider","title":"Container Width","desc":"Set the maximum width of the container. This width will not exceed the maximum width of the browser window.","max":1600,"min":1200,"depends":[["fullscreen","=",0]]},"columns_gap":{"type":"slider","title":"Gap Between Columns","max":100,"min":0,"unit":true,"responsive":true,"depends":[["no_gutter","=",0]]},"id":{"type":"text","title":"Section ID","desc":"A unique ID that will be applied to this row. Must start with a letter and may only contain dashes, underscores, letters or numbers. No spaces."},"class":{"type":"text","title":"CSS Class","desc":"If you wish to style a particular content element differently, then use this field to add a class name and also refer to it in your css file."}},"style":{"height_separator":{"type":"separator","title":"Section Height Settings"},"section_height_option":{"type":"select","title":"Height Options","desc":"Choose section\/row height from the list.","values":{"win-height":"Window Height","height":"Height"}},"section_height":{"type":"slider","title":"Set Height","desc":"Set section\/row height here in pixel(px) value.","depends":[["section_height_option","=","height"]],"max":3000,"responsive":true},"section_min_height":{"type":"slider","title":"Minimum Height","desc":"Set section\/row minimum height here in pixel(px) value.","max":3000,"responsive":true},"section_max_height":{"type":"slider","title":"Maximum Height","desc":"Set section\/row maximum height here in pixel(px) value.","max":3000,"responsive":true},"section_overflow_x":{"type":"select","title":"Overflow X","desc":"Set section\/row overflow X axis here.","values":{"auto":"Auto","hidden":"Hidden","initial":"Initial","scroll":"Scroll","visible":"Visible"}},"section_overflow_y":{"type":"select","title":"Overflow Y","desc":"Set section\/row overflow Y axis here.","values":{"auto":"Auto","hidden":"Hidden","initial":"Initial","scroll":"Scroll","visible":"Visible"}},"width_separator":{"type":"separator","title":"Section Width Settings"},"row_width":{"type":"slider","title":"Section Width","unit":true,"max":3000,"min":0,"responsive":true,"std":{"unit":"px"}},"row_max_width":{"type":"slider","title":"Section Max Width","unit":true,"max":3000,"min":0,"responsive":true,"std":{"unit":"px"}},"row_min_width":{"type":"slider","title":"Section Min Width","unit":true,"max":3000,"min":0,"responsive":true,"std":{"unit":"px"}},"other_separator":{"type":"separator","title":"Section Other Settings"},"padding":{"type":"padding","title":"Padding","desc":"Set the padding values (Top, Right, Bottom, Left). Use following units for values: px, em or %. Padding is the space between the content of the element and its border. Negative values are not allowed.","std":"50px 0px 50px 0px","placeholder":"10px 10px 10px 10px","responsive":true},"margin":{"type":"margin","title":"Margin","desc":"Set the margin for all four sides (Top Right Bottom Left). Negative values are also allowed.","std":"0px 0px 0px 0px","placeholder":"10px 10px 10px 10px","responsive":true},"color":{"type":"color","title":"Text Color"},"background_type":{"type":"buttons","title":"Enable Background Options","std":"none","values":[{"label":"None","value":"none"},{"label":"Color","value":"color"},{"label":"Image","value":"image"},{"label":"Gradient","value":"gradient"},{"label":"Video","value":"video"}]},"background_color":{"type":"color","title":"Background Color","depends":[["background_type","!=","none"],["background_type","!=","video"],["background_type","!=","gradient"]]},"background_gradient":{"type":"gradient","title":"Gradient Background","std":{"color":"#00c6fb","color2":"#005bea","deg":"45","type":"linear"},"depends":[["background_type","=","gradient"]]},"background_image":{"type":"media","format":"image","title":"Background Image","std":{"src":""},"show_input":true,"depends":[["background_type","=","image"]]},"background_parallax":{"type":"checkbox","title":"Parallax Background","desc":"Enable row background as parallax background","std":"0","depends":[["background_type","=","image"]]},"background_repeat":{"type":"select","title":"Background Repeat","values":{"no-repeat":"No Repeat","repeat":"Repeat All","repeat-x":"Repeat Horizontally","repeat-y":"Repeat Vertically","inherit":"Inherit"},"std":"no-repeat","depends":[["background_type","=","image"],["background_image","!=",""]]},"background_size":{"type":"select","title":"Background Size","desc":"Set the size of the background image. The default value is \u2018Cover\u2019, that will scale the background image to be as large as possible so that the background area is completely covered by the background image.","values":{"cover":"Cover","contain":"Contain","inherit":"Inherit","custom":"Custom"},"std":"cover","depends":[["background_type","=","image"],["background_image","!=",""]]},"background_size_custom":{"type":"slider","title":"Custom Background Size","desc":"Set custom background size value.","unit":true,"max":3000,"min":0,"depends":[["background_size","=","custom"],["background_image","!=",""]],"responsive":true,"std":{"unit":"px"}},"background_attachment":{"type":"select","title":"Background Attachment","desc":"The value of 'fixed' combined with 'cover' may not work properly on some mobile browsers (Safari iPhone).","values":{"fixed":"Fixed","scroll":"Scroll","inherit":"Inherit"},"std":"fixed","depends":[["background_type","=","image"],["background_image","!=",""]]},"background_position":{"type":"select","title":"Background Position","values":{"0 0":"Left Top","0 50%":"Left Center","0 100%":"Left Bottom","50% 0":"Center Top","50% 50%":"Center Center","50% 100%":"Center Bottom","100% 0":"Right Top","100% 50%":"Right Center","100% 100%":"Right Bottom","custom":"Custom"},"std":"0 0","depends":[["background_type","=","image"],["background_image","!=",""]]},"background_position_custom_x":{"type":"slider","title":"Background Position X","desc":"Set background positon X value. You must need to add set 'X' and 'Y' value. If you blank one value it will not work.","unit":true,"max":1000,"min":-1000,"depends":[["background_position","=","custom"],["background_image","!=",""]],"responsive":true,"std":{"unit":"px"}},"background_position_custom_y":{"type":"slider","title":"Background Position Y","desc":"Set background positon Y value. You must need to add set 'X' and 'Y' value. If you blank one value it will not work.","unit":true,"depends":[["background_position","=","custom"],["background_image","!=",""]],"max":1000,"min":-1000,"responsive":true,"std":{"unit":"px"}},"external_background_video":{"type":"checkbox","title":"Enable Youtube\/Vimeo Video in the Background","desc":"Enable this option to set Youtube\/Vimeo video background for this section","std":"0","depends":[["background_type","=","video"]]},"background_video_mp4":{"type":"media","format":"video","title":"Video MP4","depends":[["background_type","=","video"],["external_background_video","=",0]],"std":{"src":""}},"background_video_ogv":{"type":"media","format":"video","title":"Video OGV","depends":[["background_type","=","video"],["external_background_video","=",0]],"std":{"src":""}},"background_external_video":{"type":"text","title":"Youtube\/Vimeo Url","depends":[["background_type","=","video"],["external_background_video","=",1]]},"video_loop":{"type":"checkbox","title":"Play Video in Loop","desc":"Select 'Yes' if you want to play video in loop. Otherwise select 'No'.","std":1,"depends":[["background_type","=","video"],["external_background_video","!=",1]]},"overlay_separator":{"type":"separator","title":"Overlay Options","depends":[["background_type","!=","none"],["background_type","!=","color"],["background_type","!=","gradient"]]},"overlay_type":{"type":"buttons","title":"Overlay Type","std":"overlay_none","values":[{"label":"None","value":"overlay_none"},{"label":"Color","value":"overlay_color"},{"label":"Gradient","value":"overlay_gradient"},{"label":"Pattern","value":"overlay_pattern"}],"depends":[["background_type","!=","none"],["background_type","!=","color"],["background_type","!=","gradient"]]},"overlay":{"type":"color","title":"Color Overlay","desc":"Set an additional transparent overlay to soften the image or video.","depends":[["background_type","!=","none"],["background_type","!=","color"],["background_type","!=","gradient"],["overlay_type","=","overlay_color"]]},"gradient_overlay":{"type":"gradient","title":"Gradient Overlay","desc":"Set gradient transparent overlay here.","std":{"color":"rgba(127, 0, 255, 0.8)","color2":"rgba(225, 0, 255, 0.7)","deg":"45","type":"linear"},"depends":[["background_type","!=","none"],["background_type","!=","color"],["background_type","!=","gradient"],["overlay_type","=","overlay_gradient"]]},"pattern_overlay":{"type":"media","title":"Pattern Overlay","desc":"Set pattern overlay of section here. Use PNG image for transparent view.","std":"","depends":[["background_type","!=","none"],["background_type","!=","color"],["background_type","!=","gradient"],["overlay_type","=","overlay_pattern"]]},"overlay_pattern_color":{"type":"color","title":"Pattern Background Color","desc":"Set backround color for pattern image.","std":"","depends":[["background_type","!=","none"],["background_type","!=","color"],["background_type","!=","gradient"],["overlay_type","=","overlay_pattern"],["pattern_overlay","!=",""]]},"blend_mode":{"type":"select","title":"Blend Mode","desc":"Select your desired blend mode for background image.","values":{"normal":"Normal","color":"Color","color-burn":"Color Burn","color-dodge":"Color Dodge","darken":"Darken","difference":"Difference","exclusion":"Exclusion","hard-light":"Hard Light","hue":"Hue","lighten":"Lighten","luminosity":"Luminosity","multiply":"Multiply","overlay":"Overlay","saturation":"Saturation","screen":"Screen","soft-light":"Soft Light"},"std":"normal","depends":[["background_type","!=","none"],["background_type","!=","color"],["background_type","!=","gradient"],["background_type","!=","video"],["overlay_type","!=","overlay_none"]]},"row_border":{"type":"checkbox","title":"Use Border","std":0},"row_border_width":{"type":"margin","title":"Border Width","desc":"Set the border width values (Top, Right, Bottom, Left). Use 'px' unit. Negative values are not allowed.","depends":{"row_border":1},"responsive":true},"row_border_color":{"type":"color","title":"Border Color","depends":{"row_border":1}},"row_border_style":{"type":"select","title":"Border Style","values":{"none":"None","solid":"Solid","double":"Double","dotted":"Dotted","dashed":"Dashed"},"depends":{"row_border":1},"std":"solid"},"row_border_radius":{"type":"slider","title":"Border Radius","desc":"Set the border radius values (Top, Right, Bottom, Left). Use 'px' unit. Negative values are not allowed.","std":0,"max":500,"responsive":true},"row_boxshadow":{"type":"boxshadow","title":"Box Shadow","std":"0 0 0 0 #ffffff"},"separator_shape_top":{"type":"separator","title":"Top Shape"},"show_top_shape":{"type":"checkbox","title":"Enable Shape","desc":"To show shape divider at top, you need to enable this option.","std":""},"shape_name":{"type":"select","title":"Shape","values":{"bell":"Belly","brushed":"Brushed","clouds-flat":"Clouds Flat","clouds-opacity":"Clouds Opacity","drip":"Drip","hill":"Hill","hill-wave":"Hill Wave","line-wave":"Line Wave","paper-torn":"Paper Torn","pointy-wave":"Pointy Wave","rocky-mountain":"Rocky Mountain","shaggy":"Shaggy","single-wave":"Single Wave","slope-opacity":"Slope Opacity","slope":"Slope","swirl":"Swirl","wavy-opacity":"Wavy Opacity","waves3-opacity":"Waves3 Opacity","turning-slope":"Turning Slope","zigzag-sharp":"Zigzag Sharp"},"std":"clouds-flat","depends":[["show_top_shape","=",1]]},"shape_color":{"type":"color","title":"Color","std":"#e5e5e5","depends":[["show_top_shape","=",1]]},"shape_width":{"type":"slider","title":"Width","std":{"md":100,"sm":100,"xs":100},"max":600,"min":100,"responsive":true,"depends":[["show_top_shape","=",1]]},"shape_height":{"type":"slider","title":"Height","std":"","max":600,"responsive":true,"depends":[["show_top_shape","=",1]]},"shape_flip":{"type":"checkbox","title":"Flip","desc":"","std":false,"depends":[["show_top_shape","=",1],["shape_name","!=","bell"],["shape_name","!=","zigzag-sharp"]]},"shape_invert":{"type":"checkbox","title":"Invert","std":false,"depends":[["show_top_shape","=",1],["shape_name","!=","clouds-opacity"],["shape_name","!=","slope-opacity"],["shape_name","!=","waves3-opacity"],["shape_name","!=","paper-torn"],["shape_name","!=","hill-wave"],["shape_name","!=","line-wave"],["shape_name","!=","swirl"],["shape_name","!=","wavy-opacity"],["shape_name","!=","zigzag-sharp"],["shape_name","!=","brushed"]]},"shape_to_front":{"type":"checkbox","title":"Bring to Front","desc":"Place the shape above row content","std":false,"depends":[["show_top_shape","=",1]]},"separator_shape_bottom":{"type":"separator","title":"Bottom Shape"},"show_bottom_shape":{"type":"checkbox","title":"Enable Shape","desc":"To show shape divider at bottom, you need to enable this option.","std":""},"bottom_shape_name":{"type":"select","title":"Shape","values":{"bell":"Belly","brushed":"Brushed","clouds-flat":"Clouds Flat","clouds-opacity":"Clouds Opacity","drip":"Drip","hill":"Hill","hill-wave":"Hill Wave","line-wave":"Line Wave","paper-torn":"Paper Torn","pointy-wave":"Pointy Wave","rocky-mountain":"Rocky Mountain","shaggy":"Shaggy","single-wave":"Single Wave","slope-opacity":"Slope Opacity","slope":"Slope","swirl":"Swirl","wavy-opacity":"Wavy Opacity","waves3-opacity":"Waves3 Opacity","turning-slope":"Turning Slope","zigzag-sharp":"Zigzag Sharp"},"std":"clouds-opacity","depends":[["show_bottom_shape","=",1]]},"bottom_shape_color":{"type":"color","title":"Color","std":"#e5e5e5","depends":[["show_bottom_shape","=",1]]},"bottom_shape_width":{"type":"slider","title":"Width","std":{"md":100,"sm":100,"xs":100},"max":600,"min":100,"responsive":true,"depends":[["show_bottom_shape","=",1]]},"bottom_shape_height":{"type":"slider","title":"Height","std":"","max":600,"responsive":true,"depends":[["show_bottom_shape","=",1]]},"bottom_shape_flip":{"type":"checkbox","title":"Flip","desc":"","std":false,"depends":[["show_bottom_shape","=",1],["shape_name","!=","bell"],["shape_name","!=","zigzag-sharp"]]},"bottom_shape_invert":{"type":"checkbox","title":"Invert","std":false,"depends":[["show_bottom_shape","=",1],["bottom_shape_name","!=","clouds-opacity"],["bottom_shape_name","!=","slope-opacity"],["bottom_shape_name","!=","waves3-opacity"],["bottom_shape_name","!=","paper-torn"],["bottom_shape_name","!=","hill-wave"],["bottom_shape_name","!=","line-wave"],["bottom_shape_name","!=","swirl"],["shape_name","!=","wavy-opacity"],["shape_name","!=","zigzag-sharp"],["shape_name","!=","brushed"]]},"bottom_shape_to_front":{"type":"checkbox","title":"Bring to Front","desc":"Place the shape above row content","std":false,"depends":[["show_bottom_shape","=",1]]},"separator_responsive":{"type":"separator","title":"Responsive"},"hidden_xs":{"type":"checkbox","title":"Hidden on Mobile","desc":"Switch to \u2018Yes\u2019 if you want to hide this addon on mobile (smaller) displays.","std":""},"hidden_sm":{"type":"checkbox","title":"Hidden on Tablet","desc":"Switch to \u2018Yes\u2019 if you want to hide this addon on tablet displays.","std":""},"hidden_md":{"type":"checkbox","title":"Hidden on desktop","desc":"Switch to \u2018Yes\u2019 if you want to hide this addon on larger displays like desktops or laptops.","std":""}},"animation":{"animation":{"type":"animation","title":"Animation","desc":"If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file."},"animationduration":{"type":"number","title":"Animation Duration","desc":"Set how many milliseconds an animation will take to complete one cycle.","std":"300","placeholder":"300"},"animationdelay":{"type":"number","title":"Animation Delay","desc":"Set when the animation will start, this value is defined in milliseconds.","std":"0","placeholder":"300"}}},"default":{"default":{"admin_label":"","title":"","heading_selector":"h3","title_fontsize":"","title_fontweight":"","title_position":"sppb-text-center","columns_align_center":0,"columns_content_alignment":"center","fullscreen":0,"no_gutter":0,"row_width":{"unit":"px"},"row_max_width":{"unit":"px"},"row_min_width":{"unit":"px"},"padding":"50px 0px 50px 0px","margin":"0px 0px 0px 0px","background_type":"none","background_gradient":{"color":"#00c6fb","color2":"#005bea","deg":"45","type":"linear"},"background_image":{"src":""},"background_parallax":"0","background_repeat":"no-repeat","background_size":"cover","background_size_custom":{"unit":"px"},"background_attachment":"fixed","background_position":"0 0","background_position_custom_x":{"unit":"px"},"background_position_custom_y":{"unit":"px"},"external_background_video":"0","background_video_mp4":{"src":""},"background_video_ogv":{"src":""},"video_loop":1,"overlay_type":"overlay_none","gradient_overlay":{"color":"rgba(127, 0, 255, 0.8)","color2":"rgba(225, 0, 255, 0.7)","deg":"45","type":"linear"},"pattern_overlay":"","overlay_pattern_color":"","blend_mode":"normal","row_border":0,"row_border_style":"solid","row_border_radius":0,"row_boxshadow":"0 0 0 0 #ffffff","show_top_shape":"","shape_name":"clouds-flat","shape_color":"#e5e5e5","shape_width":{"md":100,"sm":100,"xs":100},"shape_height":"","shape_flip":false,"shape_invert":false,"shape_to_front":false,"show_bottom_shape":"","bottom_shape_name":"clouds-opacity","bottom_shape_color":"#e5e5e5","bottom_shape_width":{"md":100,"sm":100,"xs":100},"bottom_shape_height":"","bottom_shape_flip":false,"bottom_shape_invert":false,"bottom_shape_to_front":false,"hidden_xs":"","hidden_sm":"","hidden_md":"","animationduration":"300","animationdelay":"0"}}};";s:6:"output";s:0:"";}