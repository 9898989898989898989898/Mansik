var mediaWikiLoadStart=(new Date()).getTime(),mwPerformance=(window.performance&&performance.mark)?performance:{mark:function(){}};mwPerformance.mark('mwLoadStart');function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<8)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||(ua.indexOf('Opera/')!==-1&&(ua.indexOf('Version/')===-1?parseFloat(ua.split('Opera/')[1])<10:parseFloat(ua.split('Version/')[1])<12))||(ua.indexOf('Opera ')!==-1&&parseFloat(ua.split(' Opera ')[1])<10)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||ua.match(/MeeGo/)||(ua.match(/Glass/)&&ua.match(/Android/)));}(function(){if(!isCompatible()){document.documentElement.className=document.documentElement.className.replace(/(^|\s)client-js(\s|$)/,'$1client-nojs$2');return;}
function startUp(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/wp/load.php"});mw.loader.register([["site","dsaYz3TK"],["noscript","2Pykb7qe",[],"noscript"],["filepage","2Pykb7qe"],["user.groups","OGLk4tjd",[],"user"],["user","c/EmyMof",[],"user"],["user.cssprefs","gy3rpGMz",[],"private"],["user.defaults","NAOuwfTf"],["user.options","qfrTq4+7",[6],"private"],["user.tokens","f8tGRES/",[],"private"],["mediawiki.language.data","tlWmnmDD",[168]],["mediawiki.skinning.elements","W3oVOHpW"],["mediawiki.skinning.content","LcGJvDbu"],["mediawiki.skinning.interface","qyXrrowp"],["mediawiki.skinning.content.parsoid","jibviMeF"],["mediawiki.skinning.content.externallinks","jP4bC1ET"],["jquery.accessKeyLabel","Hl8D7vOy",[25,129]],["jquery.appear","c8hEcfuC"],["jquery.arrowSteps","sFnVYCQA"],["jquery.async","0E3DZAxI"],["jquery.autoEllipsis","gU6lEN6D",[37]],["jquery.badge","ZFJPlzTb",[165]],["jquery.byteLength","d+teDqAM"],["jquery.byteLimit","eKCMg9gB",[21]],[
"jquery.checkboxShiftClick","dw7QkzcC"],["jquery.chosen","xRXF0uBA"],["jquery.client","3JQueNui"],["jquery.color","q0nK5XaX",[27]],["jquery.colorUtil","zlhaqUsM"],["jquery.confirmable","FwyylIZj",[169]],["jquery.cookie","bK6kWxI3"],["jquery.expandableField","AESGmQTM"],["jquery.farbtastic","ESOInxTH",[27]],["jquery.footHovzer","kspuLNEc"],["jquery.form","4ZDoz/Tm"],["jquery.fullscreen","3dPj6kgT"],["jquery.getAttrs","KTV+5dwq"],["jquery.hidpi","B2t5YJFH"],["jquery.highlightText","cdY+7Rgf",[227,129]],["jquery.hoverIntent","HiwNDCuu"],["jquery.i18n","HacX/bY5",[167]],["jquery.localize","mxx2lkAL"],["jquery.makeCollapsible","OtR/7cv0"],["jquery.mockjax","u0lkz5y7"],["jquery.mw-jump","qZt9RXkq"],["jquery.mwExtension","2dira9KD"],["jquery.placeholder","+QytJVdf"],["jquery.qunit","FTbYzgXN"],["jquery.qunit.completenessTest","pvO7q67w",[46]],["jquery.spinner","0P88w6dV"],["jquery.jStorage","JF+WNJkc",[93]],["jquery.suggestions","W1KDI6Br",[37]],["jquery.tabIndex","H63Jd1DF"],[
"jquery.tablesorter","NL/SsKw3",[227,129,170]],["jquery.textSelection","vwgSqC2s",[25]],["jquery.throttle-debounce","xvQM/bXJ"],["jquery.validate","KV3CkUrp"],["jquery.xmldom","oWF0gfJM"],["jquery.tipsy","uRNq6lJm"],["jquery.ui.core","4X45Gmes",[59],"jquery.ui"],["jquery.ui.core.styles","iPFs69Ez",[],"jquery.ui"],["jquery.ui.accordion","VwLF+FpP",[58,78],"jquery.ui"],["jquery.ui.autocomplete","M8b/kqWh",[67],"jquery.ui"],["jquery.ui.button","vVHr+Vmc",[58,78],"jquery.ui"],["jquery.ui.datepicker","qjJzgRC0",[58],"jquery.ui"],["jquery.ui.dialog","ZhRXNvOI",[62,65,69,71],"jquery.ui"],["jquery.ui.draggable","2PEL1/4l",[58,68],"jquery.ui"],["jquery.ui.droppable","ICPBSb5i",[65],"jquery.ui"],["jquery.ui.menu","ni08PIzO",[58,69,78],"jquery.ui"],["jquery.ui.mouse","slKabEc8",[78],"jquery.ui"],["jquery.ui.position","QyuIMPhw",[],"jquery.ui"],["jquery.ui.progressbar","iCFxcxsb",[58,78],"jquery.ui"],["jquery.ui.resizable","LWKcy9vo",[58,68],"jquery.ui"],["jquery.ui.selectable","cwO+6V6Y",[58,68],
"jquery.ui"],["jquery.ui.slider","+NSrHgAO",[58,68],"jquery.ui"],["jquery.ui.sortable","KlVZdhBx",[58,68],"jquery.ui"],["jquery.ui.spinner","f0GMU446",[62],"jquery.ui"],["jquery.ui.tabs","+/v85rrF",[58,78],"jquery.ui"],["jquery.ui.tooltip","dXYl4lOt",[58,69,78],"jquery.ui"],["jquery.ui.widget","KG/cA56d",[],"jquery.ui"],["jquery.effects.core","rXoWkQ0S",[],"jquery.ui"],["jquery.effects.blind","a7px1KoD",[79],"jquery.ui"],["jquery.effects.bounce","bCNG++2y",[79],"jquery.ui"],["jquery.effects.clip","6OhwI76z",[79],"jquery.ui"],["jquery.effects.drop","3YDGIenB",[79],"jquery.ui"],["jquery.effects.explode","xMh9IGNW",[79],"jquery.ui"],["jquery.effects.fade","8y3BTFqO",[79],"jquery.ui"],["jquery.effects.fold","54cZ+l0+",[79],"jquery.ui"],["jquery.effects.highlight","A8zCnIxA",[79],"jquery.ui"],["jquery.effects.pulsate","obuGdk8p",[79],"jquery.ui"],["jquery.effects.scale","v6VBQ5kD",[79],"jquery.ui"],["jquery.effects.shake","VbqH5EA3",[79],"jquery.ui"],["jquery.effects.slide","4deGhWIu",[79],
"jquery.ui"],["jquery.effects.transfer","q0yLvuxa",[79],"jquery.ui"],["json","UgNOFhCg",[],null,null,"return!!(window.JSON\u0026\u0026JSON.stringify\u0026\u0026JSON.parse);"],["moment","zLelZYvr"],["mediawiki.apihelp","mADAoTwr",[119]],["mediawiki.template","4Ccz6E7o"],["mediawiki.template.mustache","pNssy+R4",[96]],["mediawiki.template.regexp","XuescZ/K",[96]],["mediawiki.apipretty","6k9XgKk6"],["mediawiki.api","g56j7zf6",[145,8]],["mediawiki.api.category","09+barhV",[134,100]],["mediawiki.api.edit","gwdIxIwA",[134,100]],["mediawiki.api.login","jX+FA8/f",[100]],["mediawiki.api.options","PVXdsaTM",[100]],["mediawiki.api.parse","q9TgzxvY",[100]],["mediawiki.api.upload","TYKUj746",[227,93,102]],["mediawiki.api.watch","t2KIYlW2",[100]],["mediawiki.content.json","sCU0cZJT"],["mediawiki.confirmCloseWindow","9qARUjdv"],["mediawiki.debug","0mUWBqcN",[32,57]],["mediawiki.debug.init","BJEFyCsz",[110]],["mediawiki.feedback","gnQOoAh3",[134,125,229]],["mediawiki.feedlink","5Y9Ke6G2"],[
"mediawiki.filewarning","oCXaib7G",[229]],["mediawiki.ForeignApi","UjiaO20b",[116]],["mediawiki.ForeignApi.core","otja8WMj",[100,228]],["mediawiki.helplink","yecHjUsl"],["mediawiki.hidpi","m9tHY4TL",[36],null,null,"return'srcset'in new Image();"],["mediawiki.hlist","X2WlC6rh",[25]],["mediawiki.htmlform","gdl2RJZe",[22,129]],["mediawiki.htmlform.styles","wLJJYgkc"],["mediawiki.htmlform.ooui.styles","DWs2SMcI"],["mediawiki.icon","u1VHp4uy"],["mediawiki.inspect","9fEv5NTJ",[21,93,129]],["mediawiki.messagePoster","6Q4CdkbY",[100,228]],["mediawiki.messagePoster.wikitext","DYrnSWH6",[102,125]],["mediawiki.notification","UPHFBGz3",[177]],["mediawiki.notify","w5plyAwp"],["mediawiki.RegExp","eGCbdk6S"],["mediawiki.pager.tablePager","zubUrDy+"],["mediawiki.searchSuggest","xC6jBl2Q",[35,45,50,100]],["mediawiki.sectionAnchor","CVFfR6TR"],["mediawiki.storage","hPF//Fx2"],["mediawiki.Title","dfKhULQg",[21,145]],["mediawiki.Upload","JHoPPw99",[106]],["mediawiki.ForeignUpload","hq45aoY9",[115,135]],[
"mediawiki.ForeignStructuredUpload","jre17iY1",[136]],["mediawiki.Upload.Dialog","sTQt5X+w",[139]],["mediawiki.Upload.BookletLayout","YD0QAwvW",[135,169,229]],["mediawiki.ForeignStructuredUpload.BookletLayout","HgXX0bhe",[137,139,224,223]],["mediawiki.toc","P8nP7qHK",[146]],["mediawiki.Uri","pKCMX6Cf",[145,98]],["mediawiki.user","w6Ynx39h",[100,146,7]],["mediawiki.userSuggest","uCWq4nr/",[50,100]],["mediawiki.util","zjoG6Mbx",[15,128]],["mediawiki.cookie","ekymExTv",[29]],["mediawiki.toolbar","lFm86Gd+"],["mediawiki.experiments","/F3G3v+M"],["mediawiki.action.edit","u6Wcvv61",[22,53,150]],["mediawiki.action.edit.styles","arVgqlXI"],["mediawiki.action.edit.collapsibleFooter","27IhzYYd",[41,146,123]],["mediawiki.action.edit.preview","IpOJ0Yl8",[33,48,53,155,100,169]],["mediawiki.action.edit.stash","K0PQXYNs",[35,100]],["mediawiki.action.history","MYqHxt1k"],["mediawiki.action.history.diff","8Nci/7MF"],["mediawiki.action.view.dblClickEdit","zw6Ytjp4",[177,7]],[
"mediawiki.action.view.metadata","/grE2WNo"],["mediawiki.action.view.categoryPage.styles","Mu4lStk0"],["mediawiki.action.view.postEdit","aR0pPHGq",[146,169,96]],["mediawiki.action.view.redirect","U7fMesGq",[25]],["mediawiki.action.view.redirectPage","R75Wwe77"],["mediawiki.action.view.rightClickEdit","snegMtSF"],["mediawiki.action.edit.editWarning","bf6CygDv",[53,109,169]],["mediawiki.action.view.filepage","e77Hw2jO"],["mediawiki.language","pEOa/ckr",[166,9]],["mediawiki.cldr","/ZCNz4DP",[167]],["mediawiki.libs.pluralruleparser","wCzbtHSO"],["mediawiki.language.init","F30UoWCm"],["mediawiki.jqueryMsg","EjtXgyaf",[227,165,145,7]],["mediawiki.language.months","PCWgfdQo",[165]],["mediawiki.language.names","A/1Q0ATK",[168]],["mediawiki.language.specialCharacters","8C7iTMhS",[165]],["mediawiki.libs.jpegmeta","4SrVENR0"],["mediawiki.page.gallery","PCb42o4q",[54,175]],["mediawiki.page.gallery.styles","nMnXK35G"],["mediawiki.page.ready","Z32kMUiU",[15,23,41,43,45]],["mediawiki.page.startup",
"vpQEyPny",[145]],["mediawiki.page.patrol.ajax","8Zs8lql2",[48,134,100,177]],["mediawiki.page.watch.ajax","McqXQszq",[107,177]],["mediawiki.page.image.pagination","CF9ggrY7",[48,142]],["mediawiki.special","YMN+3csG"],["mediawiki.special.block","Iw7LrIbN",[145]],["mediawiki.special.changeemail","x/FnQCHR",[145]],["mediawiki.special.changeslist","GUpnw2KV"],["mediawiki.special.changeslist.legend","3PFAckGn"],["mediawiki.special.changeslist.legend.js","BibMCVVm",[41,146]],["mediawiki.special.changeslist.enhanced","htOpAqBt"],["mediawiki.special.edittags","D9p/FOud",[24]],["mediawiki.special.edittags.styles","5jpcgJmJ"],["mediawiki.special.import","mumdRaK+"],["mediawiki.special.movePage","S4GFP0sB",[221]],["mediawiki.special.movePage.styles","zUFw9wuA"],["mediawiki.special.pageLanguage","+NYriHcu"],["mediawiki.special.pagesWithProp","VWsQVVVS"],["mediawiki.special.preferences","+hRgGTQQ",[109,165,127]],["mediawiki.special.recentchanges","3I13pCpg",[181]],["mediawiki.special.search",
"eCq88KNz"],["mediawiki.special.undelete","FlrB58aF"],["mediawiki.special.upload","TRk9RD4h",[48,134,100,109,169,173,96]],["mediawiki.special.userlogin.common.styles","ebptjftq"],["mediawiki.special.userlogin.signup.styles","BFXEO5Ld"],["mediawiki.special.userlogin.login.styles","SFkVGTV0"],["mediawiki.special.userlogin.signup.js","y9PnK68j",[54,100,169]],["mediawiki.special.unwatchedPages","GRHjCF/K",[134,107]],["mediawiki.special.javaScriptTest","93LduZCK",[142]],["mediawiki.special.version","6yHgOhZk"],["mediawiki.legacy.config","OeZRly7l"],["mediawiki.legacy.commonPrint","5sEKOuzP"],["mediawiki.legacy.protect","rKcbOuxR",[22]],["mediawiki.legacy.shared","erwrFwaU"],["mediawiki.legacy.oldshared","zQb4TL61"],["mediawiki.legacy.wikibits","Kq+9lK1E",[145]],["mediawiki.ui","DcNlXNMz"],["mediawiki.ui.checkbox","XTi0F7w3"],["mediawiki.ui.radio","NPaye7ha"],["mediawiki.ui.anchor","kSBwja/8"],["mediawiki.ui.button","MDYNiMi3"],["mediawiki.ui.input","f3XBtLGl"],["mediawiki.ui.icon",
"Fvtp3tcv"],["mediawiki.ui.text","vSacfTa9"],["mediawiki.widgets","TF2lxxaE",[19,22,115,134,224,222]],["mediawiki.widgets.styles","m9z4+Reg"],["mediawiki.widgets.DateInputWidget","S7Fr1fbn",[94,229]],["mediawiki.widgets.CategorySelector","12YST3Xv",[100,229]],["mediawiki.widgets.UserInputWidget","CRwO/mpJ",[229]],["es5-shim","/E5OQxWZ",[],null,null,"return(function(){'use strict';return!this\u0026\u0026!!Function.prototype.bind;}());"],["dom-level2-shim","XQ01lKlU",[],null,null,"return!!window.Node;"],["oojs","lsaGVn1H",[226,93]],["oojs-ui","LKDPlSZo",[228,230,231,232,233]],["oojs-ui.styles","2fZ6h7he"],["oojs-ui.styles.icons","MzNoDOfD"],["oojs-ui.styles.indicators","n68Jxvt6"],["oojs-ui.styles.textures","TRlah+tt"],["oojs-ui.styles.icons-accessibility","iJFy0986"],["oojs-ui.styles.icons-alerts","d5ByD37V"],["oojs-ui.styles.icons-content","7WEMO1lg"],["oojs-ui.styles.icons-editing-advanced","sn1ENSuZ"],["oojs-ui.styles.icons-editing-core","oVZ6VPW6"],[
"oojs-ui.styles.icons-editing-list","UOmavPTc"],["oojs-ui.styles.icons-editing-styling","8XwkP0a3"],["oojs-ui.styles.icons-interactions","Tn3oAwkU"],["oojs-ui.styles.icons-layout","El+w4HIB"],["oojs-ui.styles.icons-location","Yohyhn9w"],["oojs-ui.styles.icons-media","CsjoJ9ia"],["oojs-ui.styles.icons-moderation","W2vcyWPW"],["oojs-ui.styles.icons-movement","161drVkr"],["oojs-ui.styles.icons-user","NDxBsL5T"],["oojs-ui.styles.icons-wikimedia","MYsCpqeR"],["ext.cite.styles","CFDC5brX"],["ext.cite.a11y","/stFWVcY"],["ext.cite.style","ujE3OGOW"],["ext.inputBox.styles","gsfwDGJo"],["ext.inputBox","IRTbGa7N",[54]],["ext.nuke","SyG4duDo"],["ext.pygments","euaNOiWt"],["ext.geshi.visualEditor","oZSb+9N5",["ext.visualEditor.mwcore"]],["mediawiki.api.titleblacklist","qnAMKTPH",[100]],["jquery.wikiEditor","Yeec/IKR",[53,165],"ext.wikiEditor"],["jquery.wikiEditor.dialogs","EBLGFhcF",[51,64,263],"ext.wikiEditor"],["jquery.wikiEditor.dialogs.config","so4j3Bnv",[50,259,134,100,169,96],"ext.wikiEditor"
],["jquery.wikiEditor.preview","EILWjar7",[258,100],"ext.wikiEditor"],["jquery.wikiEditor.publish","erBS6PHG",[259],"ext.wikiEditor"],["jquery.wikiEditor.toolbar","8NstdMLL",[18,29,258,265],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.config","pE2sVL4H",[263,172],"ext.wikiEditor"],["jquery.wikiEditor.toolbar.i18n","tna6T7B4",[],"ext.wikiEditor"],["ext.wikiEditor","uurpmUqM",[258,143],"ext.wikiEditor"],["ext.wikiEditor.dialogs","st0OzWTI",[270,260],"ext.wikiEditor"],["ext.wikiEditor.preview","i9gkx1r5",[266,261],"ext.wikiEditor"],["ext.wikiEditor.publish","ce1C/yA+",[266,262],"ext.wikiEditor"],["ext.wikiEditor.toolbar","2adYZFyI",[266,264],"ext.wikiEditor"],["ext.wikiEditor.toolbar.styles","rOWl1+6M",[],"ext.wikiEditor"],["ext.math.styles","Kt+LsIuS"],["ext.math.desktop.styles","bCl2y75X"],["ext.math.scripts","rnUV1hsX"],["ext.math.editbutton.enabler","1adtiumA"],["ext.math.visualEditor","gw8frEeG",["ext.visualEditor.mwcore"]],["skins.metrolook.styles","W8Kw4q0Q"],[
"skins.metrolook.styles.responsive","agaUgqVp"],["skins.metrolook.js","w7CeYISz",[51,54,131]],["skins.metrolook.collapsibleNav","V7y9sujG",[25,29,51]],["ext.disambiguator.visualEditor","HBGT2weC",["ext.visualEditor.mediawiki","ext.visualEditor.mwmeta"]],["ext.scribunto.errors","l5WqPHzZ",[64]],["ext.scribunto.logs","uQ8LJXjl"],["ext.scribunto.edit","HyuHfI4D",[48,100]],["ext.moderation.special","USCyvCvs"],["ext.moderation.special.ajax","lY/sGbws",[142,100]],["ext.moderation.edit","K8bFbt8v"],["ext.moderation.ajaxhook","47mda82N"],["ext.moderation.ve","s0v3VNLa",[288,"ext.visualEditor.targetLoader",100]],["ext.moderation.notify","ofFDJo3C",[169,143]],["ext.moderation.notify.desktop","NnyUT5XM"],["pdfhandler.messages","+gj0Cj+l"]]);;mw.config.set({"wgLoadScript":"/wp/load.php","debug":!1,"skin":"metrolook","stylepath":"/wp/skins","wgUrlProtocols":
"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/wp/index.php/$1","wgScriptPath":"/wp","wgScriptExtension":".php","wgScript":"/wp/index.php","wgSearchType":null,"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"http://wp.wiki-wiki.ru","wgServerName":"wp.wiki-wiki.ru","wgUserLanguage":"ru","wgContentLanguage":"ru","wgTranslateNumerals":!0,"wgVersion":"1.26.2","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgMainPageTitle":"Заглавная страница","wgFormattedNamespaces":{"-2":"Медиа","-1":"Служебная","0":"","1":"Обсуждение","2":"Участник","3":"Обсуждение участника","4":"Википедия","5":
"Обсуждение Википедии","6":"Файл","7":"Обсуждение файла","8":"MediaWiki","9":"Обсуждение MediaWiki","10":"Шаблон","11":"Обсуждение шаблона","12":"Справка","13":"Обсуждение справки","14":"Категория","15":"Обсуждение категории","828":"Модуль","829":"Обсуждение модуля","2300":"Gadget","2301":"Gadget talk","2302":"Gadget definition","2303":"Gadget definition talk"},"wgNamespaceIds":{"медиа":-2,"служебная":-1,"":0,"обсуждение":1,"участник":2,"обсуждение_участника":3,"википедия":4,"обсуждение_википедии":5,"файл":6,"обсуждение_файла":7,"mediawiki":8,"обсуждение_mediawiki":9,"шаблон":10,"обсуждение_шаблона":11,"справка":12,"обсуждение_справки":13,"категория":14,
"обсуждение_категории":15,"модуль":828,"обсуждение_модуля":829,"gadget":2300,"gadget_talk":2301,"gadget_definition":2302,"gadget_definition_talk":2303,"пользователь":2,"обсуждение_пользователя":3,"помощь":12,"обсуждение_помощи":13,"специальные":-1,"вп":4,"изображение":6,"обсуждение_изображения":7,"участница":2,"обсуждение_участницы":3,"image":6,"image_talk":7,"media":-2,"special":-1,"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"module":828,"module_talk":829},"wgContentNamespaces":[0],"wgSiteName":"Википедия","wgDBname":"wp","wgExtraSignatureNamespaces":[],"wgAvailableSkins":{"metrolook":"Metrolook","fallback":"Fallback","apioutput":"ApiOutput"},
"wgExtensionAssetsPath":"/wp/extensions","wgCookiePrefix":"wp","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":15552000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[2302,2303],"wgLegalTitleChars":" %!\"$&'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":!1,"wgResourceLoaderLegacyModules":["mediawiki.legacy.wikibits"],"wgForeignUploadTargets":[],"wgEnableUploads":!0,"wgWikiEditorMagicWords":{"redirect":"#перенаправление","img_right":"справа","img_left":"слева","img_none":"без","img_center":"центр","img_thumbnail":"мини","img_framed":"обрамить","img_frameless":"безрамки"},"wgMetrolook":{"mobile":!0}});window.RLQ=window.RLQ||[];while(RLQ.length){RLQ.shift()();}window.RLQ={push:function(fn){fn();}};}var script=document.createElement('script');script.src=
"/wp/load.php?debug=false&lang=ru&modules=jquery%2Cmediawiki&only=scripts&skin=metrolook&version=pBbY1IVI";script.onload=script.onreadystatechange=function(){if(!script.readyState||/loaded|complete/.test(script.readyState)){script.onload=script.onreadystatechange=null;script=null;startUp();}};document.getElementsByTagName('head')[0].appendChild(script);}());