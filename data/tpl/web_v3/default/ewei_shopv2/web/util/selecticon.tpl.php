<?php defined('IN_IA') or exit('Access Denied');?><style>
	#selectIcon .modal-dialog {width: 750px;}
	#selectIcon .modal-body {padding: 10px;}
	#selectIcon .main {height: 420px; overflow-y: auto;}
	#selectIcon .main nav {height: 60px; width: 80px; margin: 5px; display: block; float: left; cursor: pointer;}
	#selectIcon .main nav .icon {font-size: 30px; height: 38px; width: 80px; display: block; text-align: center; line-height: 42px;}
	#selectIcon .main nav .text {font-size: 10px; height: 22px; width: 80px; display: block; text-align: center; line-height: 16px;}
	#selectIcon .main nav:hover {background: #f6f6f6;}
</style>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h4 class="modal-title">选择图标</h4>
        </div>
        <div class="modal-body">
			<div class="main">
				<nav data-class="icon-qian"><span class="icon icon-qian"></span><span class="text">qian</span></nav>
				<nav data-class="icon-dingdan2"><span class="icon icon-dingdan2"></span><span class="text">dingdan2</span></nav>
				<nav data-class="icon-tixian1"><span class="icon icon-tixian1"></span><span class="text">tixian1</span></nav>
				<nav data-class="icon-heilongjiangtubiao11"><span class="icon icon-heilongjiangtubiao11"></span><span class="text">heilongjiang</span></nav>
				<nav data-class="icon-erweima1"><span class="icon icon-erweima1"></span><span class="text">erweima1</span></nav>

				<nav data-class="icon-shouji"><span class="icon icon-shouji"></span><span class="text">tel</span></nav>
				<nav data-class="icon-dingdan1"><span class="icon icon-dingdan1"></span><span class="text">order</span></nav>
				<nav data-class="icon-gouwuche"><span class="icon icon-gouwuche"></span><span class="text">cart</span></nav>
				<nav data-class="icon-gudong1"><span class="icon icon-gudong1"></span><span class="text">member</span></nav>
				<nav data-class="icon-hexiaoshangpin"><span class="icon icon-hexiaoshangpin"></span><span class="text">goods</span></nav>
				<nav data-class="icon-xiaofei"><span class="icon icon-xiaofei"></span><span class="text">pay</span></nav>
				<nav data-class="icon-paihang"><span class="icon icon-paihang"></span><span class="text">ranking</span></nav>
				<nav data-class="icon-zhibo1"><span class="icon icon-zhibo1"></span><span class="text">living</span></nav>
				<nav data-class="icon-wodeyouhuiquan"><span class="icon icon-wodeyouhuiquan"></span><span class="text">coupon</span></nav>
				<nav data-class="icon-lingquyouhuiquan1"><span class="icon icon-lingquyouhuiquan1"></span><span class="text">coupon</span></nav>
				<nav data-class="icon-shangcheng1"><span class="icon icon-shangcheng1"></span><span class="text">shop</span></nav>
				<nav data-class="icon-fenxiao"><span class="icon icon-fenxiao"></span><span class="text">saleRanking</span></nav>
				<nav data-class="icon-qiandao"><span class="icon icon-qiandao"></span><span class="text">sign</span></nav>
				<nav data-class="icon-daituikuan2"><span class="icon icon-daituikuan2"></span><span class="text">refuse</span></nav>
				<nav data-class="icon-daifukuan1"><span class="icon icon-daifukuan1"></span><span class="text">pay</span></nav>
				<nav data-class="icon-daishouhuo1"><span class="icon icon-daishouhuo1"></span><span class="text">recive</span></nav>
				<nav data-class="icon-daifahuo1"><span class="icon icon-daifahuo1"></span><span class="text">send</span></nav>
				<nav data-class="icon-bangzhu1"><span class="icon icon-bangzhu1"></span><span class="text">help</span></nav>
				<nav data-class="icon-shezhi"><span class="icon icon-shezhi"></span><span class="text">setting</span></nav>
				<nav data-class="icon-dingwei1"><span class="icon icon-dingwei1"></span><span class="text">location</span></nav>

				<nav data-class="icon-appreciate"><span class="icon icon-appreciate"></span><span class="text">appreciate</span></nav>
				<nav data-class="icon-check"><span class="icon icon-check"></span><span class="text">check</span></nav>
				<nav data-class="icon-close"><span class="icon icon-close"></span><span class="text">close</span></nav>
				<nav data-class="icon-edit"><span class="icon icon-edit"></span><span class="text">edit</span></nav>
				<nav data-class="icon-emoji"><span class="icon icon-emoji"></span><span class="text">emoji</span></nav>
				<nav data-class="icon-favorfill"><span class="icon icon-favorfill"></span><span class="text">favorfill</span></nav>
				<nav data-class="icon-favor"><span class="icon icon-favor"></span><span class="text">favor</span></nav>
				<nav data-class="icon-loading"><span class="icon icon-loading"></span><span class="text">loading</span></nav>
				<nav data-class="icon-locationfill"><span class="icon icon-locationfill"></span><span class="text">locationfill</span></nav>
				<nav data-class="icon-location"><span class="icon icon-location"></span><span class="text">location</span></nav>
				<nav data-class="icon-phone"><span class="icon icon-phone"></span><span class="text">phone</span></nav>
				<nav data-class="icon-roundcheckfill"><span class="icon icon-roundcheckfill"></span><span class="text">roundcheckfill</span></nav>
				<nav data-class="icon-roundcheck"><span class="icon icon-roundcheck"></span><span class="text">roundcheck</span></nav>
				<nav data-class="icon-roundclosefill"><span class="icon icon-roundclosefill"></span><span class="text">roundclosefill</span></nav>
				<nav data-class="icon-roundclose"><span class="icon icon-roundclose"></span><span class="text">roundclose</span></nav>
				<nav data-class="icon-roundrightfill"><span class="icon icon-roundrightfill"></span><span class="text">roundrightfill</span></nav>
				<nav data-class="icon-roundright"><span class="icon icon-roundright"></span><span class="text">roundright</span></nav>
				<nav data-class="icon-search"><span class="icon icon-search"></span><span class="text">search</span></nav>
				<nav data-class="icon-taxi"><span class="icon icon-taxi"></span><span class="text">taxi</span></nav>
				<nav data-class="icon-timefill"><span class="icon icon-timefill"></span><span class="text">timefill</span></nav>
				<nav data-class="icon-time"><span class="icon icon-time"></span><span class="text">time</span></nav>
				<nav data-class="icon-unfold"><span class="icon icon-unfold"></span><span class="text">unfold</span></nav>
				<nav data-class="icon-warnfill"><span class="icon icon-warnfill"></span><span class="text">warnfill</span></nav>
				<nav data-class="icon-warn"><span class="icon icon-warn"></span><span class="text">warn</span></nav>
				<nav data-class="icon-camerafill"><span class="icon icon-camerafill"></span><span class="text">camerafill</span></nav>
				<nav data-class="icon-camera"><span class="icon icon-camera"></span><span class="text">camera</span></nav>
				<nav data-class="icon-commentfill"><span class="icon icon-commentfill"></span><span class="text">commentfill</span></nav>
				<nav data-class="icon-comment"><span class="icon icon-comment"></span><span class="text">comment</span></nav>
				<nav data-class="icon-likefill"><span class="icon icon-likefill"></span><span class="text">likefill</span></nav>
				<nav data-class="icon-like"><span class="icon icon-like"></span><span class="text">like</span></nav>
				<nav data-class="icon-notificationfill"><span class="icon icon-notificationfill"></span><span class="text">notificationfill</span></nav>
				<nav data-class="icon-notification"><span class="icon icon-notification"></span><span class="text">notification</span></nav>
				<nav data-class="icon-order"><span class="icon icon-order"></span><span class="text">order</span></nav>
				<nav data-class="icon-samefill"><span class="icon icon-samefill"></span><span class="text">samefill</span></nav>
				<nav data-class="icon-same"><span class="icon icon-same"></span><span class="text">same</span></nav>
				<nav data-class="icon-deliver"><span class="icon icon-deliver"></span><span class="text">deliver</span></nav>
				<nav data-class="icon-evaluate"><span class="icon icon-evaluate"></span><span class="text">evaluate</span></nav>
				<nav data-class="icon-pay"><span class="icon icon-pay"></span><span class="text">pay</span></nav>
				<nav data-class="icon-send"><span class="icon icon-send"></span><span class="text">send</span></nav>
				<nav data-class="icon-shop"><span class="icon icon-shop"></span><span class="text">shop</span></nav>
				<nav data-class="icon-ticket"><span class="icon icon-ticket"></span><span class="text">ticket</span></nav>
				<nav data-class="icon-back"><span class="icon icon-back"></span><span class="text">back</span></nav>
				<nav data-class="icon-cascades"><span class="icon icon-cascades"></span><span class="text">cascades</span></nav>
				<nav data-class="icon-discover"><span class="icon icon-discover"></span><span class="text">discover</span></nav>
				<nav data-class="icon-list"><span class="icon icon-list"></span><span class="text">list</span></nav>
				<nav data-class="icon-more"><span class="icon icon-more"></span><span class="text">more</span></nav>
				<nav data-class="icon-myfill"><span class="icon icon-myfill"></span><span class="text">myfill</span></nav>
				<nav data-class="icon-my"><span class="icon icon-my"></span><span class="text">my</span></nav>
				<nav data-class="icon-scan"><span class="icon icon-scan"></span><span class="text">scan</span></nav>
				<nav data-class="icon-settings"><span class="icon icon-settings"></span><span class="text">settings</span></nav>
				<nav data-class="icon-questionfill"><span class="icon icon-questionfill"></span><span class="text">questionfill</span></nav>
				<nav data-class="icon-question"><span class="icon icon-question"></span><span class="text">question</span></nav>
				<nav data-class="icon-shopfill"><span class="icon icon-shopfill"></span><span class="text">shopfill</span></nav>
				<nav data-class="icon-form"><span class="icon icon-form"></span><span class="text">form</span></nav>
				<nav data-class="icon-pic"><span class="icon icon-pic"></span><span class="text">pic</span></nav>
				<nav data-class="icon-filter"><span class="icon icon-filter"></span><span class="text">filter</span></nav>
				<nav data-class="icon-footprint"><span class="icon icon-footprint"></span><span class="text">footprint</span></nav>
				<nav data-class="icon-top"><span class="icon icon-top"></span><span class="text">top</span></nav>
				<nav data-class="icon-pulldown"><span class="icon icon-pulldown"></span><span class="text">pulldown</span></nav>
				<nav data-class="icon-pullup"><span class="icon icon-pullup"></span><span class="text">pullup</span></nav>
				<nav data-class="icon-right"><span class="icon icon-right"></span><span class="text">right</span></nav>
				<nav data-class="icon-refresh"><span class="icon icon-refresh"></span><span class="text">refresh</span></nav>
				<nav data-class="icon-moreandroid"><span class="icon icon-moreandroid"></span><span class="text">moreandroid</span></nav>
				<nav data-class="icon-deletefill"><span class="icon icon-deletefill"></span><span class="text">deletefill</span></nav>
				<nav data-class="icon-refund"><span class="icon icon-refund"></span><span class="text">refund</span></nav>
				<nav data-class="icon-cart"><span class="icon icon-cart"></span><span class="text">cart</span></nav>
				<nav data-class="icon-qrcode"><span class="icon icon-qrcode"></span><span class="text">qrcode</span></nav>
				<nav data-class="icon-remind"><span class="icon icon-remind"></span><span class="text">remind</span></nav>
				<nav data-class="icon-delete"><span class="icon icon-delete"></span><span class="text">delete</span></nav>
				<nav data-class="icon-profile"><span class="icon icon-profile"></span><span class="text">profile</span></nav>
				<nav data-class="icon-home"><span class="icon icon-home"></span><span class="text">home</span></nav>
				<nav data-class="icon-cartfill"><span class="icon icon-cartfill"></span><span class="text">cartfill</span></nav>
				<nav data-class="icon-discoverfill"><span class="icon icon-discoverfill"></span><span class="text">discoverfill</span></nav>
				<nav data-class="icon-homefill"><span class="icon icon-homefill"></span><span class="text">homefill</span></nav>
				<nav data-class="icon-message"><span class="icon icon-message"></span><span class="text">message</span></nav>
				<nav data-class="icon-addressbook"><span class="icon icon-addressbook"></span><span class="text">addressbook</span></nav>
				<nav data-class="icon-link"><span class="icon icon-link"></span><span class="text">link</span></nav>
				<nav data-class="icon-lock"><span class="icon icon-lock"></span><span class="text">lock</span></nav>
				<nav data-class="icon-unlock"><span class="icon icon-unlock"></span><span class="text">unlock</span></nav>
				<nav data-class="icon-vip"><span class="icon icon-vip"></span><span class="text">vip</span></nav>
				<nav data-class="icon-weibo"><span class="icon icon-weibo"></span><span class="text">weibo</span></nav>
				<nav data-class="icon-activity"><span class="icon icon-activity"></span><span class="text">activity</span></nav>
				<nav data-class="icon-big"><span class="icon icon-big"></span><span class="text">big</span></nav>
				<nav data-class="icon-friendaddfill"><span class="icon icon-friendaddfill"></span><span class="text">friendaddfill</span></nav>
				<nav data-class="icon-friendadd"><span class="icon icon-friendadd"></span><span class="text">friendadd</span></nav>
				<nav data-class="icon-friendfamous"><span class="icon icon-friendfamous"></span><span class="text">friendfamous</span></nav>
				<nav data-class="icon-friend"><span class="icon icon-friend"></span><span class="text">friend</span></nav>
				<nav data-class="icon-goods"><span class="icon icon-goods"></span><span class="text">goods</span></nav>
				<nav data-class="icon-selection"><span class="icon icon-selection"></span><span class="text">selection</span></nav>
				<nav data-class="icon-explore"><span class="icon icon-explore"></span><span class="text">explore</span></nav>
				<nav data-class="icon-present"><span class="icon icon-present"></span><span class="text">present</span></nav>
				<nav data-class="icon-squarecheckfill"><span class="icon icon-squarecheckfill"></span><span class="text">squarecheckfill</span></nav>
				<nav data-class="icon-square"><span class="icon icon-square"></span><span class="text">square</span></nav>
				<nav data-class="icon-squarecheck"><span class="icon icon-squarecheck"></span><span class="text">squarecheck</span></nav>
				<nav data-class="icon-round"><span class="icon icon-round"></span><span class="text">round</span></nav>
				<nav data-class="icon-roundaddfill"><span class="icon icon-roundaddfill"></span><span class="text">roundaddfill</span></nav>
				<nav data-class="icon-roundadd"><span class="icon icon-roundadd"></span><span class="text">roundadd</span></nav>
				<nav data-class="icon-add"><span class="icon icon-add"></span><span class="text">add</span></nav>
				<nav data-class="icon-notificationforbidfill"><span class="icon icon-notificationforbidfill"></span><span class="text">notificationforbidfill</span></nav>
				<nav data-class="icon-explorefill"><span class="icon icon-explorefill"></span><span class="text">explorefill</span></nav>
				<nav data-class="icon-fold"><span class="icon icon-fold"></span><span class="text">fold</span></nav>
				<nav data-class="icon-game"><span class="icon icon-game"></span><span class="text">game</span></nav>
				<nav data-class="icon-redpacket"><span class="icon icon-redpacket"></span><span class="text">redpacket</span></nav>
				<nav data-class="icon-selectionfill"><span class="icon icon-selectionfill"></span><span class="text">selectionfill</span></nav>
				<nav data-class="icon-similar"><span class="icon icon-similar"></span><span class="text">similar</span></nav>
				<nav data-class="icon-appreciatefill"><span class="icon icon-appreciatefill"></span><span class="text">appreciatefill</span></nav>
				<nav data-class="icon-infofill"><span class="icon icon-infofill"></span><span class="text">infofill</span></nav>
				<nav data-class="icon-info"><span class="icon icon-info"></span><span class="text">info</span></nav>
				<nav data-class="icon-forwardfill"><span class="icon icon-forwardfill"></span><span class="text">forwardfill</span></nav>
				<nav data-class="icon-forward"><span class="icon icon-forward"></span><span class="text">forward</span></nav>
				<nav data-class="icon-rechargefill"><span class="icon icon-rechargefill"></span><span class="text">rechargefill</span></nav>
				<nav data-class="icon-recharge"><span class="icon icon-recharge"></span><span class="text">recharge</span></nav>
				<nav data-class="icon-vipcard"><span class="icon icon-vipcard"></span><span class="text">vipcard</span></nav>
				<nav data-class="icon-voice"><span class="icon icon-voice"></span><span class="text">voice</span></nav>
				<nav data-class="icon-voicefill"><span class="icon icon-voicefill"></span><span class="text">voicefill</span></nav>
				<nav data-class="icon-friendfavor"><span class="icon icon-friendfavor"></span><span class="text">friendfavor</span></nav>
				<nav data-class="icon-wifi"><span class="icon icon-wifi"></span><span class="text">wifi</span></nav>
				<nav data-class="icon-share"><span class="icon icon-share"></span><span class="text">share</span></nav>
				<nav data-class="icon-wefill"><span class="icon icon-wefill"></span><span class="text">wefill</span></nav>
				<nav data-class="icon-we"><span class="icon icon-we"></span><span class="text">we</span></nav>
				<nav data-class="icon-lightauto"><span class="icon icon-lightauto"></span><span class="text">lightauto</span></nav>
				<nav data-class="icon-lightforbid"><span class="icon icon-lightforbid"></span><span class="text">lightforbid</span></nav>
				<nav data-class="icon-lightfill"><span class="icon icon-lightfill"></span><span class="text">lightfill</span></nav>
				<nav data-class="icon-camerarotate"><span class="icon icon-camerarotate"></span><span class="text">camerarotate</span></nav>
				<nav data-class="icon-light"><span class="icon icon-light"></span><span class="text">light</span></nav>
				<nav data-class="icon-barcode"><span class="icon icon-barcode"></span><span class="text">barcode</span></nav>
				<nav data-class="icon-flashlightclose"><span class="icon icon-flashlightclose"></span><span class="text">flashlightclose</span></nav>
				<nav data-class="icon-flashlightopen"><span class="icon icon-flashlightopen"></span><span class="text">flashlightopen</span></nav>
				<nav data-class="icon-searchlist"><span class="icon icon-searchlist"></span><span class="text">searchlist</span></nav>
				<nav data-class="icon-service"><span class="icon icon-service"></span><span class="text">service</span></nav>
				<nav data-class="icon-sort"><span class="icon icon-sort"></span><span class="text">sort</span></nav>
				<nav data-class="icon-down"><span class="icon icon-down"></span><span class="text">down</span></nav>
				<nav data-class="icon-mobile"><span class="icon icon-mobile"></span><span class="text">mobile</span></nav>
				<nav data-class="icon-mobilefill"><span class="icon icon-mobilefill"></span><span class="text">mobilefill</span></nav>
				<nav data-class="icon-sanjiao2"><span class="icon icon-sanjiao2"></span><span class="text">sanjiao2</span></nav>
				<nav data-class="icon-sanjiao1"><span class="icon icon-sanjiao1"></span><span class="text">sanjiao1</span></nav>
				<nav data-class="icon-sanjiao4"><span class="icon icon-sanjiao4"></span><span class="text">sanjiao4</span></nav>
				<nav data-class="icon-sanjiao3"><span class="icon icon-sanjiao3"></span><span class="text">sanjiao3</span></nav>
				<nav data-class="icon-copy"><span class="icon icon-copy"></span><span class="text">copy</span></nav>
				<nav data-class="icon-countdownfill"><span class="icon icon-countdownfill"></span><span class="text">countdownfill</span></nav>
				<nav data-class="icon-countdown"><span class="icon icon-countdown"></span><span class="text">countdown</span></nav>
				<nav data-class="icon-noticefill"><span class="icon icon-noticefill"></span><span class="text">noticefill</span></nav>
				<nav data-class="icon-notice"><span class="icon icon-notice"></span><span class="text">notice</span></nav>
				<nav data-class="icon-qiang"><span class="icon icon-qiang"></span><span class="text">qiang</span></nav>
				<nav data-class="icon-upstagefill"><span class="icon icon-upstagefill"></span><span class="text">upstagefill</span></nav>
				<nav data-class="icon-upstage"><span class="icon icon-upstage"></span><span class="text">upstage</span></nav>
				<nav data-class="icon-babyfill"><span class="icon icon-babyfill"></span><span class="text">babyfill</span></nav>
				<nav data-class="icon-baby"><span class="icon icon-baby"></span><span class="text">baby</span></nav>
				<nav data-class="icon-brandfill"><span class="icon icon-brandfill"></span><span class="text">brandfill</span></nav>
				<nav data-class="icon-brand"><span class="icon icon-brand"></span><span class="text">brand</span></nav>
				<nav data-class="icon-choicenessfill"><span class="icon icon-choicenessfill"></span><span class="text">choicenessfill</span></nav>
				<nav data-class="icon-choiceness"><span class="icon icon-choiceness"></span><span class="text">choiceness</span></nav>
				<nav data-class="icon-clothesfill"><span class="icon icon-clothesfill"></span><span class="text">clothesfill</span></nav>
				<nav data-class="icon-clothes"><span class="icon icon-clothes"></span><span class="text">clothes</span></nav>
				<nav data-class="icon-creativefill"><span class="icon icon-creativefill"></span><span class="text">creativefill</span></nav>
				<nav data-class="icon-creative"><span class="icon icon-creative"></span><span class="text">creative</span></nav>
				<nav data-class="icon-female"><span class="icon icon-female"></span><span class="text">female</span></nav>
				<nav data-class="icon-keyboard"><span class="icon icon-keyboard"></span><span class="text">keyboard</span></nav>
				<nav data-class="icon-male"><span class="icon icon-male"></span><span class="text">male</span></nav>
				<nav data-class="icon-newfill"><span class="icon icon-newfill"></span><span class="text">newfill</span></nav>
				<nav data-class="icon-new"><span class="icon icon-new"></span><span class="text">new</span></nav>
				<nav data-class="icon-pullleft"><span class="icon icon-pullleft"></span><span class="text">pullleft</span></nav>
				<nav data-class="icon-pullright"><span class="icon icon-pullright"></span><span class="text">pullright</span></nav>
				<nav data-class="icon-rankfill"><span class="icon icon-rankfill"></span><span class="text">rankfill</span></nav>
				<nav data-class="icon-rank"><span class="icon icon-rank"></span><span class="text">rank</span></nav>
				<nav data-class="icon-bad"><span class="icon icon-bad"></span><span class="text">bad</span></nav>
				<nav data-class="icon-cameraadd"><span class="icon icon-cameraadd"></span><span class="text">cameraadd</span></nav>
				<nav data-class="icon-focus"><span class="icon icon-focus"></span><span class="text">focus</span></nav>
				<nav data-class="icon-friendfill"><span class="icon icon-friendfill"></span><span class="text">friendfill</span></nav>
				<nav data-class="icon-cameraaddfill"><span class="icon icon-cameraaddfill"></span><span class="text">cameraaddfill</span></nav>
				<nav data-class="icon-xinjian2"><span class="icon icon-xinjian2"></span><span class="text">xinjian2</span></nav>
				<nav data-class="icon-add1"><span class="icon icon-add1"></span><span class="text">add1</span></nav>
				<nav data-class="icon-answer"><span class="icon icon-answer"></span><span class="text">answer</span></nav>
				<nav data-class="icon-app"><span class="icon icon-app"></span><span class="text">app</span></nav>
				<nav data-class="icon-browser"><span class="icon icon-browser"></span><span class="text">browser</span></nav>
				<nav data-class="icon-caller"><span class="icon icon-caller"></span><span class="text">caller</span></nav>
				<nav data-class="icon-camera1"><span class="icon icon-camera1"></span><span class="text">camera1</span></nav>
				<nav data-class="icon-card"><span class="icon icon-card"></span><span class="text">card</span></nav>
				<nav data-class="icon-cart1"><span class="icon icon-cart1"></span><span class="text">cart1</span></nav>
				<nav data-class="icon-check1"><span class="icon icon-check1"></span><span class="text">check1</span></nav>
				<nav data-class="icon-code"><span class="icon icon-code"></span><span class="text">code</span></nav>
				<nav data-class="icon-computer"><span class="icon icon-computer"></span><span class="text">computer</span></nav>
				<nav data-class="icon-copy1"><span class="icon icon-copy1"></span><span class="text">copy1</span></nav>
				<nav data-class="icon-delete1"><span class="icon icon-delete1"></span><span class="text">delete1</span></nav>
				<nav data-class="icon-delete2"><span class="icon icon-delete2"></span><span class="text">delete2</span></nav>
				<nav data-class="icon-deliver1"><span class="icon icon-deliver1"></span><span class="text">deliver1</span></nav>
				<nav data-class="icon-display"><span class="icon icon-display"></span><span class="text">display</span></nav>
				<nav data-class="icon-down1"><span class="icon icon-down1"></span><span class="text">down1</span></nav>
				<nav data-class="icon-download"><span class="icon icon-download"></span><span class="text">download</span></nav>
				<nav data-class="icon-edit1"><span class="icon icon-edit1"></span><span class="text">edit1</span></nav>
				<nav data-class="icon-emoji1"><span class="icon icon-emoji1"></span><span class="text">emoji1</span></nav>
				<nav data-class="icon-enclosure"><span class="icon icon-enclosure"></span><span class="text">enclosure</span></nav>
				<nav data-class="icon-eraser"><span class="icon icon-eraser"></span><span class="text">eraser</span></nav>
				<nav data-class="icon-favor1"><span class="icon icon-favor1"></span><span class="text">favor1</span></nav>
				<nav data-class="icon-file"><span class="icon icon-file"></span><span class="text">file</span></nav>
				<nav data-class="icon-file2"><span class="icon icon-file2"></span><span class="text">file2</span></nav>
				<nav data-class="icon-fill"><span class="icon icon-fill"></span><span class="text">fill</span></nav>
				<nav data-class="icon-fold1"><span class="icon icon-fold1"></span><span class="text">fold1</span></nav>
				<nav data-class="icon-folderadd"><span class="icon icon-folderadd"></span><span class="text">folderadd</span></nav>
				<nav data-class="icon-folder"><span class="icon icon-folder"></span><span class="text">folder</span></nav>
				<nav data-class="icon-font"><span class="icon icon-font"></span><span class="text">font</span></nav>
				<nav data-class="icon-friends"><span class="icon icon-friends"></span><span class="text">friends</span></nav>
				<nav data-class="icon-goods1"><span class="icon icon-goods1"></span><span class="text">goods1</span></nav>
				<nav data-class="icon-hangup"><span class="icon icon-hangup"></span><span class="text">hangup</span></nav>
				<nav data-class="icon-hide"><span class="icon icon-hide"></span><span class="text">hide</span></nav>
				<nav data-class="icon-history"><span class="icon icon-history"></span><span class="text">history</span></nav>
				<nav data-class="icon-home1"><span class="icon icon-home1"></span><span class="text">home1</span></nav>
				<nav data-class="icon-information"><span class="icon icon-information"></span><span class="text">information</span></nav>
				<nav data-class="icon-left"><span class="icon icon-left"></span><span class="text">left</span></nav>
				<nav data-class="icon-like1"><span class="icon icon-like1"></span><span class="text">like1</span></nav>
				<nav data-class="icon-link1"><span class="icon icon-link1"></span><span class="text">link1</span></nav>
				<nav data-class="icon-loading1"><span class="icon icon-loading1"></span><span class="text">loading1</span></nav>
				<nav data-class="icon-location1"><span class="icon icon-location1"></span><span class="text">location1</span></nav>
				<nav data-class="icon-lock1"><span class="icon icon-lock1"></span><span class="text">lock1</span></nav>
				<nav data-class="icon-mail"><span class="icon icon-mail"></span><span class="text">mail</span></nav>
				<nav data-class="icon-mark"><span class="icon icon-mark"></span><span class="text">mark</span></nav>
				<nav data-class="icon-menu"><span class="icon icon-menu"></span><span class="text">menu</span></nav>
				<nav data-class="icon-message1"><span class="icon icon-message1"></span><span class="text">message1</span></nav>
				<nav data-class="icon-minus"><span class="icon icon-minus"></span><span class="text">minus</span></nav>
				<nav data-class="icon-more1"><span class="icon icon-more1"></span><span class="text">more1</span></nav>
				<nav data-class="icon-music"><span class="icon icon-music"></span><span class="text">music</span></nav>
				<nav data-class="icon-my1"><span class="icon icon-my1"></span><span class="text">my1</span></nav>
				<nav data-class="icon-notificationforbid"><span class="icon icon-notificationforbid"></span><span class="text">notificationforbid</span></nav>
				<nav data-class="icon-notification1"><span class="icon icon-notification1"></span><span class="text">notification1</span></nav>
				<nav data-class="icon-order1"><span class="icon icon-order1"></span><span class="text">order1</span></nav>
				<nav data-class="icon-pause"><span class="icon icon-pause"></span><span class="text">pause</span></nav>
				<nav data-class="icon-person2"><span class="icon icon-person2"></span><span class="text">person2</span></nav>
				<nav data-class="icon-phone1"><span class="icon icon-phone1"></span><span class="text">phone1</span></nav>
				<nav data-class="icon-pic1"><span class="icon icon-pic1"></span><span class="text">pic1</span></nav>
				<nav data-class="icon-play"><span class="icon icon-play"></span><span class="text">play</span></nav>
				<nav data-class="icon-question1"><span class="icon icon-question1"></span><span class="text">question1</span></nav>
				<nav data-class="icon-record"><span class="icon icon-record"></span><span class="text">record</span></nav>
				<nav data-class="icon-refresh1"><span class="icon icon-refresh1"></span><span class="text">refresh1</span></nav>
				<nav data-class="icon-rest"><span class="icon icon-rest"></span><span class="text">rest</span></nav>
				<nav data-class="icon-right1"><span class="icon icon-right1"></span><span class="text">right1</span></nav>
				<nav data-class="icon-ringpause"><span class="icon icon-ringpause"></span><span class="text">ringpause</span></nav>
				<nav data-class="icon-ring"><span class="icon icon-ring"></span><span class="text">ring</span></nav>
				<nav data-class="icon-rotate"><span class="icon icon-rotate"></span><span class="text">rotate</span></nav>
				<nav data-class="icon-roundclose1"><span class="icon icon-roundclose1"></span><span class="text">roundclose1</span></nav>
				<nav data-class="icon-search1"><span class="icon icon-search1"></span><span class="text">search1</span></nav>
				<nav data-class="icon-service1"><span class="icon icon-service1"></span><span class="text">service1</span></nav>
				<nav data-class="icon-share1"><span class="icon icon-share1"></span><span class="text">share1</span></nav>
				<nav data-class="icon-shopping"><span class="icon icon-shopping"></span><span class="text">shopping</span></nav>
				<nav data-class="icon-sitting"><span class="icon icon-sitting"></span><span class="text">sitting</span></nav>
				<nav data-class="icon-tag"><span class="icon icon-tag"></span><span class="text">tag</span></nav>
				<nav data-class="icon-telephone"><span class="icon icon-telephone"></span><span class="text">telephone</span></nav>
				<nav data-class="icon-todown"><span class="icon icon-todown"></span><span class="text">todown</span></nav>
				<nav data-class="icon-toleft"><span class="icon icon-toleft"></span><span class="text">toleft</span></nav>
				<nav data-class="icon-toright"><span class="icon icon-toright"></span><span class="text">toright</span></nav>
				<nav data-class="icon-totop"><span class="icon icon-totop"></span><span class="text">totop</span></nav>
				<nav data-class="icon-top1"><span class="icon icon-top1"></span><span class="text">top1</span></nav>
				<nav data-class="icon-unfold1"><span class="icon icon-unfold1"></span><span class="text">unfold1</span></nav>
				<nav data-class="icon-unlock1"><span class="icon icon-unlock1"></span><span class="text">unlock1</span></nav>
				<nav data-class="icon-upload"><span class="icon icon-upload"></span><span class="text">upload</span></nav>
				<nav data-class="icon-video"><span class="icon icon-video"></span><span class="text">video</span></nav>
				<nav data-class="icon-all"><span class="icon icon-all"></span><span class="text">all</span></nav>
				<nav data-class="icon-back1"><span class="icon icon-back1"></span><span class="text">back1</span></nav>
				<nav data-class="icon-cart2"><span class="icon icon-cart2"></span><span class="text">cart2</span></nav>
				<nav data-class="icon-category"><span class="icon icon-category"></span><span class="text">category</span></nav>
				<nav data-class="icon-close1"><span class="icon icon-close1"></span><span class="text">close1</span></nav>
				<nav data-class="icon-comments"><span class="icon icon-comments"></span><span class="text">comments</span></nav>
				<nav data-class="icon-cry"><span class="icon icon-cry"></span><span class="text">cry</span></nav>
				<nav data-class="icon-delete2"><span class="icon icon-delete2"></span><span class="text">delete2</span></nav>
				<nav data-class="icon-edit2"><span class="icon icon-edit2"></span><span class="text">edit2</span></nav>
				<nav data-class="icon-email"><span class="icon icon-email"></span><span class="text">email</span></nav>
				<nav data-class="icon-favorite"><span class="icon icon-favorite"></span><span class="text">favorite</span></nav>
				<nav data-class="icon-folder1"><span class="icon icon-folder1"></span><span class="text">folder1</span></nav>
				<nav data-class="icon-form1"><span class="icon icon-form1"></span><span class="text">form1</span></nav>
				<nav data-class="icon-help"><span class="icon icon-help"></span><span class="text">help</span></nav>
				<nav data-class="icon-information1"><span class="icon icon-information1"></span><span class="text">information1</span></nav>
				<nav data-class="icon-less"><span class="icon icon-less"></span><span class="text">less</span></nav>
				<nav data-class="icon-moreunfold"><span class="icon icon-moreunfold"></span><span class="text">moreunfold</span></nav>
				<nav data-class="icon-more2"><span class="icon icon-more2"></span><span class="text">more2</span></nav>
				<nav data-class="icon-pic2"><span class="icon icon-pic2"></span><span class="text">pic2</span></nav>
				<nav data-class="icon-qrcode1"><span class="icon icon-qrcode1"></span><span class="text">qrcode1</span></nav>
				<nav data-class="icon-refresh2"><span class="icon icon-refresh2"></span><span class="text">refresh2</span></nav>
				<nav data-class="icon-rfq"><span class="icon icon-rfq"></span><span class="text">rfq</span></nav>
				<nav data-class="icon-search2"><span class="icon icon-search2"></span><span class="text">search2</span></nav>
				<nav data-class="icon-selected"><span class="icon icon-selected"></span><span class="text">selected</span></nav>
				<nav data-class="icon-set"><span class="icon icon-set"></span><span class="text">set</span></nav>
				<nav data-class="icon-smile"><span class="icon icon-smile"></span><span class="text">smile</span></nav>
				<nav data-class="icon-success"><span class="icon icon-success"></span><span class="text">success</span></nav>
				<nav data-class="icon-survey"><span class="icon icon-survey"></span><span class="text">survey</span></nav>
				<nav data-class="icon-training"><span class="icon icon-training"></span><span class="text">training</span></nav>
				<nav data-class="icon-viewgallery"><span class="icon icon-viewgallery"></span><span class="text">viewgallery</span></nav>
				<nav data-class="icon-viewlist"><span class="icon icon-viewlist"></span><span class="text">viewlist</span></nav>
				<nav data-class="icon-warning"><span class="icon icon-warning"></span><span class="text">warning</span></nav>
				<nav data-class="icon-wrong"><span class="icon icon-wrong"></span><span class="text">wrong</span></nav>
				<nav data-class="icon-account"><span class="icon icon-account"></span><span class="text">account</span></nav>
				<nav data-class="icon-add2"><span class="icon icon-add2"></span><span class="text">add2</span></nav>
				<nav data-class="icon-atm"><span class="icon icon-atm"></span><span class="text">atm</span></nav>
				<nav data-class="icon-apps"><span class="icon icon-apps"></span><span class="text">apps</span></nav>
				<nav data-class="icon-paintfill"><span class="icon icon-paintfill"></span><span class="text">paintfill</span></nav>
				<nav data-class="icon-paint"><span class="icon icon-paint"></span><span class="text">paint</span></nav>
				<nav data-class="icon-picfill"><span class="icon icon-picfill"></span><span class="text">picfill</span></nav>
				<nav data-class="icon-yaochi"><span class="icon icon-yaochi"></span><span class="text">yaochi</span></nav>
				<nav data-class="icon-clock"><span class="icon icon-clock"></span><span class="text">clock</span></nav>
				<nav data-class="icon-remind1"><span class="icon icon-remind1"></span><span class="text">remind1</span></nav>
				<nav data-class="icon-refresharrow"><span class="icon icon-refresharrow"></span><span class="text">refresharrow</span></nav>
				<nav data-class="icon-markfill"><span class="icon icon-markfill"></span><span class="text">markfill</span></nav>
				<nav data-class="icon-mark1"><span class="icon icon-mark1"></span><span class="text">mark1</span></nav>
				<nav data-class="icon-presentfill"><span class="icon icon-presentfill"></span><span class="text">presentfill</span></nav>
				<nav data-class="icon-repeal"><span class="icon icon-repeal"></span><span class="text">repeal</span></nav>
				<nav data-class="icon-calendar"><span class="icon icon-calendar"></span><span class="text">calendar</span></nav>
				<nav data-class="icon-wangwang"><span class="icon icon-wangwang"></span><span class="text">wangwang</span></nav>
				<nav data-class="icon-time1"><span class="icon icon-time1"></span><span class="text">time1</span></nav>
				<nav data-class="icon-alipay"><span class="icon icon-alipay"></span><span class="text">alipay</span></nav>
				<nav data-class="icon-people2"><span class="icon icon-people2"></span><span class="text">people2</span></nav>
				<nav data-class="icon-address"><span class="icon icon-address"></span><span class="text">address</span></nav>
				<nav data-class="icon-natice"><span class="icon icon-natice"></span><span class="text">natice</span></nav>
				<nav data-class="icon-man"><span class="icon icon-man"></span><span class="text">man</span></nav>
				<nav data-class="icon-women"><span class="icon icon-women"></span><span class="text">women</span></nav>
				<nav data-class="icon-add3"><span class="icon icon-add3"></span><span class="text">add3</span></nav>
				<nav data-class="icon-album"><span class="icon icon-album"></span><span class="text">album</span></nav>
				<nav data-class="icon-money"><span class="icon icon-money"></span><span class="text">money</span></nav>
				<nav data-class="icon-people3"><span class="icon icon-people3"></span><span class="text">people3</span></nav>
				<nav data-class="icon-phone2"><span class="icon icon-phone2"></span><span class="text">phone2</span></nav>
				<nav data-class="icon-chat"><span class="icon icon-chat"></span><span class="text">chat</span></nav>
				<nav data-class="icon-peoplefill"><span class="icon icon-peoplefill"></span><span class="text">peoplefill</span></nav>
				<nav data-class="icon-people"><span class="icon icon-people"></span><span class="text">people</span></nav>
				<nav data-class="icon-servicefill"><span class="icon icon-servicefill"></span><span class="text">servicefill</span></nav>
				<nav data-class="icon-repair"><span class="icon icon-repair"></span><span class="text">repair</span></nav>
				<nav data-class="icon-file1"><span class="icon icon-file1"></span><span class="text">file1</span></nav>
				<nav data-class="icon-repairfill"><span class="icon icon-repairfill"></span><span class="text">repairfill</span></nav>
				<nav data-class="icon-taoxiaopu"><span class="icon icon-taoxiaopu"></span><span class="text">taoxiaopu</span></nav>
				<nav data-class="icon-attentionfill"><span class="icon icon-attentionfill"></span><span class="text">attentionfill</span></nav>
				<nav data-class="icon-attention"><span class="icon icon-attention"></span><span class="text">attention</span></nav>
				<nav data-class="icon-commandfill"><span class="icon icon-commandfill"></span><span class="text">commandfill</span></nav>
				<nav data-class="icon-command"><span class="icon icon-command"></span><span class="text">command</span></nav>
				<nav data-class="icon-communityfill"><span class="icon icon-communityfill"></span><span class="text">communityfill</span></nav>
				<nav data-class="icon-community"><span class="icon icon-community"></span><span class="text">community</span></nav>
				<nav data-class="icon-read"><span class="icon icon-read"></span><span class="text">read</span></nav>
				<nav data-class="icon-attachment"><span class="icon icon-attachment"></span><span class="text">attachment</span></nav>
				<nav data-class="icon-3column"><span class="icon icon-3column"></span><span class="text">3column</span></nav>
				<nav data-class="icon-4column"><span class="icon icon-4column"></span><span class="text">4column</span></nav>
				<nav data-class="icon-calendar1"><span class="icon icon-calendar1"></span><span class="text">calendar1</span></nav>
				<nav data-class="icon-cut"><span class="icon icon-cut"></span><span class="text">cut</span></nav>
				<nav data-class="icon-magic"><span class="icon icon-magic"></span><span class="text">magic</span></nav>
				<nav data-class="icon-discount"><span class="icon icon-discount"></span><span class="text">discount</span></nav>
				<nav data-class="icon-service2"><span class="icon icon-service2"></span><span class="text">service2</span></nav>
				<nav data-class="icon-print"><span class="icon icon-print"></span><span class="text">print</span></nav>
				<nav data-class="icon-box"><span class="icon icon-box"></span><span class="text">box</span></nav>
				<nav data-class="icon-process"><span class="icon icon-process"></span><span class="text">process</span></nav>
				<nav data-class="icon-backwardfill"><span class="icon icon-backwardfill"></span><span class="text">backwardfill</span></nav>
				<nav data-class="icon-forwardfill1"><span class="icon icon-forwardfill1"></span><span class="text">forwardfill1</span></nav>
				<nav data-class="icon-playfill"><span class="icon icon-playfill"></span><span class="text">playfill</span></nav>
				<nav data-class="icon-stop"><span class="icon icon-stop"></span><span class="text">stop</span></nav>
				<nav data-class="icon-tagfill"><span class="icon icon-tagfill"></span><span class="text">tagfill</span></nav>
				<nav data-class="icon-tag1"><span class="icon icon-tag1"></span><span class="text">tag1</span></nav>
				<nav data-class="icon-group"><span class="icon icon-group"></span><span class="text">group</span></nav>
				<nav data-class="icon-bags"><span class="icon icon-bags"></span><span class="text">bags</span></nav>
				<nav data-class="icon-beauty"><span class="icon icon-beauty"></span><span class="text">beauty</span></nav>
				<nav data-class="icon-electrical"><span class="icon icon-electrical"></span><span class="text">electrical</span></nav>
				<nav data-class="icon-home2"><span class="icon icon-home2"></span><span class="text">home2</span></nav>
				<nav data-class="icon-electronics"><span class="icon icon-electronics"></span><span class="text">electronics</span></nav>
				<nav data-class="icon-gifts"><span class="icon icon-gifts"></span><span class="text">gifts</span></nav>
				<nav data-class="icon-apparel"><span class="icon icon-apparel"></span><span class="text">apparel</span></nav>
				<nav data-class="icon-lights"><span class="icon icon-lights"></span><span class="text">lights</span></nav>
				<nav data-class="icon-sports"><span class="icon icon-sports"></span><span class="text">sports</span></nav>
				<nav data-class="icon-toys"><span class="icon icon-toys"></span><span class="text">toys</span></nav>
				<nav data-class="icon-auto"><span class="icon icon-auto"></span><span class="text">auto</span></nav>
				<nav data-class="icon-jewelry"><span class="icon icon-jewelry"></span><span class="text">jewelry</span></nav>
				<nav data-class="icon-mac"><span class="icon icon-mac"></span><span class="text">mac</span></nav>
				<nav data-class="icon-windows"><span class="icon icon-windows"></span><span class="text">windows</span></nav>
				<nav data-class="icon-android"><span class="icon icon-android"></span><span class="text">android</span></nav>
				<nav data-class="icon-windows8"><span class="icon icon-windows8"></span><span class="text">windows8</span></nav>
				<nav data-class="icon-trade-assurance"><span class="icon icon-trade-assurance"></span><span class="text">trade-assurance</span></nav>
				<nav data-class="icon-browse"><span class="icon icon-browse"></span><span class="text">browse</span></nav>
				<nav data-class="icon-rfqqm"><span class="icon icon-rfqqm"></span><span class="text">rfqqm</span></nav>
				<nav data-class="icon-rfqquantity"><span class="icon icon-rfqquantity"></span><span class="text">rfqquantity</span></nav>
				<nav data-class="icon-rfq1"><span class="icon icon-rfq1"></span><span class="text">rfq1</span></nav>
				<nav data-class="icon-scanning"><span class="icon icon-scanning"></span><span class="text">scanning</span></nav>
				<nav data-class="icon-favorite1"><span class="icon icon-favorite1"></span><span class="text">favorite1</span></nav>
				<nav data-class="icon-wechat"><span class="icon icon-wechat"></span><span class="text">wechat</span></nav>
				<nav data-class="icon-compare"><span class="icon icon-compare"></span><span class="text">compare</span></nav>
				<nav data-class="icon-filter1"><span class="icon icon-filter1"></span><span class="text">filter1</span></nav>
				<nav data-class="icon-pin"><span class="icon icon-pin"></span><span class="text">pin</span></nav>
				<nav data-class="icon-history1"><span class="icon icon-history1"></span><span class="text">history1</span></nav>
				<nav data-class="icon-productfeatures"><span class="icon icon-productfeatures"></span><span class="text">productfeatures</span></nav>
				<nav data-class="icon-supplierfeatures"><span class="icon icon-supplierfeatures"></span><span class="text">supplierfeatures</span></nav>
				<nav data-class="icon-similarproduct"><span class="icon icon-similarproduct"></span><span class="text">similarproduct</span></nav>
				<nav data-class="icon-all1"><span class="icon icon-all1"></span><span class="text">all1</span></nav>
				<nav data-class="icon-backdelete"><span class="icon icon-backdelete"></span><span class="text">backdelete</span></nav>
				<nav data-class="icon-hotfill"><span class="icon icon-hotfill"></span><span class="text">hotfill</span></nav>
				<nav data-class="icon-hot"><span class="icon icon-hot"></span><span class="text">hot</span></nav>
				<nav data-class="icon-post"><span class="icon icon-post"></span><span class="text">post</span></nav>
				<nav data-class="icon-radiobox"><span class="icon icon-radiobox"></span><span class="text">radiobox</span></nav>
				<nav data-class="icon-rounddown"><span class="icon icon-rounddown"></span><span class="text">rounddown</span></nav>
				<nav data-class="icon-upload1"><span class="icon icon-upload1"></span><span class="text">upload1</span></nav>
				<nav data-class="icon-writefill"><span class="icon icon-writefill"></span><span class="text">writefill</span></nav>
				<nav data-class="icon-write"><span class="icon icon-write"></span><span class="text">write</span></nav>
				<nav data-class="icon-radioboxfill"><span class="icon icon-radioboxfill"></span><span class="text">radioboxfill</span></nav>
				<nav data-class="icon-link2"><span class="icon icon-link2"></span><span class="text">link2</span></nav>
				<nav data-class="icon-cut1"><span class="icon icon-cut1"></span><span class="text">cut1</span></nav>
				<nav data-class="icon-table"><span class="icon icon-table"></span><span class="text">table</span></nav>
				<nav data-class="icon-navlist"><span class="icon icon-navlist"></span><span class="text">navlist</span></nav>
				<nav data-class="icon-imagetext"><span class="icon icon-imagetext"></span><span class="text">imagetext</span></nav>
				<nav data-class="icon-text"><span class="icon icon-text"></span><span class="text">text</span></nav>
				<nav data-class="icon-move"><span class="icon icon-move"></span><span class="text">move</span></nav>
				<nav data-class="icon-punch"><span class="icon icon-punch"></span><span class="text">punch</span></nav>
				<nav data-class="icon-shake"><span class="icon icon-shake"></span><span class="text">shake</span></nav>
				<nav data-class="icon-subtract"><span class="icon icon-subtract"></span><span class="text">subtract</span></nav>
				<nav data-class="icon-dollar"><span class="icon icon-dollar"></span><span class="text">dollar</span></nav>
				<nav data-class="icon-add4"><span class="icon icon-add4"></span><span class="text">add4</span></nav>
				<nav data-class="icon-move1"><span class="icon icon-move1"></span><span class="text">move1</span></nav>
				<nav data-class="icon-safe"><span class="icon icon-safe"></span><span class="text">safe</span></nav>
				<nav data-class="icon-activityfill"><span class="icon icon-activityfill"></span><span class="text">activityfill</span></nav>
				<nav data-class="icon-crownfill"><span class="icon icon-crownfill"></span><span class="text">crownfill</span></nav>
				<nav data-class="icon-crown"><span class="icon icon-crown"></span><span class="text">crown</span></nav>
				<nav data-class="icon-goodsfill"><span class="icon icon-goodsfill"></span><span class="text">goodsfill</span></nav>
				<nav data-class="icon-messagefill"><span class="icon icon-messagefill"></span><span class="text">messagefill</span></nav>
				<nav data-class="icon-profilefill"><span class="icon icon-profilefill"></span><span class="text">profilefill</span></nav>
				<nav data-class="icon-sound"><span class="icon icon-sound"></span><span class="text">sound</span></nav>
				<nav data-class="icon-sponsorfill"><span class="icon icon-sponsorfill"></span><span class="text">sponsorfill</span></nav>
				<nav data-class="icon-sponsor"><span class="icon icon-sponsor"></span><span class="text">sponsor</span></nav>
				<nav data-class="icon-upblock"><span class="icon icon-upblock"></span><span class="text">upblock</span></nav>
				<nav data-class="icon-weblock"><span class="icon icon-weblock"></span><span class="text">weblock</span></nav>
				<nav data-class="icon-weunblock"><span class="icon icon-weunblock"></span><span class="text">weunblock</span></nav>
				<nav data-class="icon-wechat1"><span class="icon icon-wechat1"></span><span class="text">wechat1</span></nav>
				<nav data-class="icon-raw"><span class="icon icon-raw"></span><span class="text">raw</span></nav>
				<nav data-class="icon-office"><span class="icon icon-office"></span><span class="text">office</span></nav>
				<nav data-class="icon-agriculture"><span class="icon icon-agriculture"></span><span class="text">agriculture</span></nav>
				<nav data-class="icon-machinery"><span class="icon icon-machinery"></span><span class="text">machinery</span></nav>
				<nav data-class="icon-assessedbadge"><span class="icon icon-assessedbadge"></span><span class="text">assessedbadge</span></nav>
				<nav data-class="icon-gerenzhongxin"><span class="icon icon-gerenzhongxin"></span><span class="text">gerenzhongxin</span></nav>
				<nav data-class="icon-jifen"><span class="icon icon-jifen"></span><span class="text">jifen</span></nav>
				<nav data-class="icon-renwuguanli"><span class="icon icon-renwuguanli"></span><span class="text">renwuguanli</span></nav>
				<nav data-class="icon-operation"><span class="icon icon-operation"></span><span class="text">operation</span></nav>
				<nav data-class="icon-my2"><span class="icon icon-my2"></span><span class="text">my2</span></nav>
				<nav data-class="icon-myfill1"><span class="icon icon-myfill1"></span><span class="text">myfill1</span></nav>
				<nav data-class="icon-remind2"><span class="icon icon-remind2"></span><span class="text">remind2</span></nav>
				<nav data-class="icon-icondownload"><span class="icon icon-icondownload"></span><span class="text">icondownload</span></nav>
				<nav data-class="icon-map"><span class="icon icon-map"></span><span class="text">map</span></nav>
				<nav data-class="icon-bad1"><span class="icon icon-bad1"></span><span class="text">bad1</span></nav>
				<nav data-class="icon-good"><span class="icon icon-good"></span><span class="text">good</span></nav>
				<nav data-class="icon-skip"><span class="icon icon-skip"></span><span class="text">skip</span></nav>
				<nav data-class="icon-iconfontplay2"><span class="icon icon-iconfontplay2"></span><span class="text">iconfontplay2</span></nav>
				<nav data-class="icon-iconfontstop"><span class="icon icon-iconfontstop"></span><span class="text">iconfontstop</span></nav>
				<nav data-class="icon-compass"><span class="icon icon-compass"></span><span class="text">compass</span></nav>
				<nav data-class="icon-security"><span class="icon icon-security"></span><span class="text">security</span></nav>
				<nav data-class="icon-share2"><span class="icon icon-share2"></span><span class="text">share2</span></nav>
				<nav data-class="icon-store"><span class="icon icon-store"></span><span class="text">store</span></nav>
				<nav data-class="icon-manageorder"><span class="icon icon-manageorder"></span><span class="text">manageorder</span></nav>
				<nav data-class="icon-rejectedorder"><span class="icon icon-rejectedorder"></span><span class="text">rejectedorder</span></nav>
				<nav data-class="icon-phone3"><span class="icon icon-phone3"></span><span class="text">phone3</span></nav>
				<nav data-class="icon-bussinessman"><span class="icon icon-bussinessman"></span><span class="text">bussinessman</span></nav>
				<nav data-class="icon-emojifill"><span class="icon icon-emojifill"></span><span class="text">emojifill</span></nav>
				<nav data-class="icon-emojiflashfill"><span class="icon icon-emojiflashfill"></span><span class="text">emojiflashfill</span></nav>
				<nav data-class="icon-shoes"><span class="icon icon-shoes"></span><span class="text">shoes</span></nav>
				<nav data-class="icon-mobilephone"><span class="icon icon-mobilephone"></span><span class="text">mobilephone</span></nav>
				<nav data-class="icon-record1"><span class="icon icon-record1"></span><span class="text">record1</span></nav>
				<nav data-class="icon-text1"><span class="icon icon-text1"></span><span class="text">text1</span></nav>
				<nav data-class="icon-videofill"><span class="icon icon-videofill"></span><span class="text">videofill</span></nav>
				<nav data-class="icon-video1"><span class="icon icon-video1"></span><span class="text">video1</span></nav>
				<nav data-class="icon-emailfilling"><span class="icon icon-emailfilling"></span><span class="text">emailfilling</span></nav>
				<nav data-class="icon-favoritesfilling"><span class="icon icon-favoritesfilling"></span><span class="text">favoritesfilling</span></nav>
				<nav data-class="icon-accountfilling"><span class="icon icon-accountfilling"></span><span class="text">accountfilling</span></nav>
				<nav data-class="icon-bussinesscard"><span class="icon icon-bussinesscard"></span><span class="text">bussinesscard</span></nav>
				<nav data-class="icon-creditlevel"><span class="icon icon-creditlevel"></span><span class="text">creditlevel</span></nav>
				<nav data-class="icon-creditlevelfilling"><span class="icon icon-creditlevelfilling"></span><span class="text">creditlevelfilling</span></nav>
				<nav data-class="icon-card012"><span class="icon icon-card012"></span><span class="text">card012</span></nav>
				<nav data-class="icon-exl"><span class="icon icon-exl"></span><span class="text">exl</span></nav>
				<nav data-class="icon-pdf"><span class="icon icon-pdf"></span><span class="text">pdf</span></nav>
				<nav data-class="icon-zip"><span class="icon icon-zip"></span><span class="text">zip</span></nav>
				<nav data-class="icon-sorting"><span class="icon icon-sorting"></span><span class="text">sorting</span></nav>
				<nav data-class="icon-copy2"><span class="icon icon-copy2"></span><span class="text">copy2</span></nav>
				<nav data-class="icon-city"><span class="icon icon-city"></span><span class="text">city</span></nav>
				<nav data-class="icon-city1"><span class="icon icon-city1"></span><span class="text">city1</span></nav>
				<nav data-class="icon-city2"><span class="icon icon-city2"></span><span class="text">city2</span></nav>
				<nav data-class="icon-shengfen"><span class="icon icon-shengfen"></span><span class="text">shengfen</span></nav>
				<nav data-class="icon-shengfen1"><span class="icon icon-shengfen1"></span><span class="text">shengfen1</span></nav>
				<nav data-class="icon-xiangmuzhouqi"><span class="icon icon-xiangmuzhouqi text-danger" ></span><span class="text">shengfen1</span></nav>
			</div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
        </div>
        <script>
        	$(function(){
        		
        		$("#selectUrl").find('#selectUrlTab a').click(function(e) {
						$('#tab').val($(this).attr('href'));
						e.preventDefault();
						$(this).tab('show');
				});
        		
        		$(".select-btn").click(function(){
        			var type = $(this).data("type");
        			var kw = $.trim($("#select-"+type+"-kw").val());
        			if(!kw){
        				tip.msgbox.err("请输入搜索关键字！");
        				return;
        			}
        			$("#select-"+type+"-list").html('<div class="tip">正在进行搜索...</div>');
        			$.ajax("<?php  echo webUrl('util/selecturl/querygoods', array('full'=>$full))?>", { 
		      			type: "get",
		      			dataType: "html",
		      			cache: false,
		      			data: {kw:kw, type:type}
		      		}).done(function (html) {
		      			$("#select-"+type+"-list").html(html);
		      		});
        			
        		});
        	});
        </script>
    </div>

 