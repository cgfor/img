<?php

/*
 * V6  2019.12.27 
 * 
 * 威兔主要从事网站设计，Discuz模板制作，WordPress企业项目，PHP+Mysql应用开发及相关外包服务。
 *
 * 工作时间：周一至周五，周六需提前预约，节假日休息。
 *
 * 网站：www.v2my.com
 * QQ：32-77558-32
 *
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

//修改时注意标点符号
$langplus = array(
	'home'=>'首页',
	'bbs'=>'社区',
	'feed'=>'动态',
	'blog'=>'日志',	
	'doing'=>'记录',
	'album'=>'相册',
	'medal'=>'勋章',
	'wall'=>'留言',
	'guide'=>'发现',
	'groups'=>'圈子',
	'follow'=>'说说',
	'ranklist'=>'热榜',
	'threadtypes'=>'分类',
	'subforums'=>'版块',
	'digest'=>'精华',
	'top'=>'置顶',
	'pic'=>'图',
	'activity_already'=>'报名人数',
	'activity_payment'=>'花销',
	'apply_name'=>'报名用户',
	'trade_name'=>'商品名称',
	'trade_bargain'=>'联系卖家',
	'floor'=>'楼',
	'total'=>'有',
	'totals'=>'共有',
	'pack_up'=>'收起',
	'of'=>'的',
	'di'=>'第',
	'od'=>'条',
	'page'=>'页',
	'ticket'=>'票',
	'piece'=>'件',
	'kinds'=>'种',
	'tenthousand'=>'万',
	'heats'=>'热',
	'adigest'=>'精',
	'he'=>'他',
	'she'=>'她',
	'people'=>'人',
	'addup'=>'赞',
	'ask'=>'问',
	'star'=>'星',
	'already'=>'已经',
	'other'=>'其他',
	'view'=>'阅读',
	'view_related'=>'相关阅读',
	'browsed'=>'浏览',
	'list'=>'列表',
	'plays'=>'播放',
	'video'=>'视频',
	'audio'=>'音频',
	'music'=>'音乐',
	'detail'=>'详情',
	'comment'=>'评论',
	'askat'=>'问于',
	'answer'=>'回答',
	'iwant'=>'我要',
	'sayaword'=>'我也说一句',
	'rewardanswer'=>'我来回答',
	'views'=>'次阅读',
	'searchportal'=>'搜索文章',
	'guidesofa' =>'沙发',
	'forum_nothreads'=>'本栏目或指定的范围内尚无主题',
	'todaypost'=>'今日',
	'yesterday'=>'昨日',
	'forumposts'=>'帖子',
	'forumusers'=>'会员',
	'forum_posts'=>'帖数',
	'recolumn'=>'相关',
	'subcolumn'=>'下级', 
	'backcolumn'=>'上级', 
	'threads'=>'主题',
	'profile'=>'资料',
	'me'=>'我的',
	'tools'=>'工具箱',
	'managers'=>'管理组',
	'add_friend'=>'加好友',
	'ignore_friend'=>'删好友',
	'oltime'=>'上线时间',
	'user_manager'=>'管理',
	'all'=>'全部',
	'projectnum'=>'项目数量',
	'favorite_forum'=>'版块收藏',
	'forum_myfav'=>'我收藏的',
	'forum_myfav_f'=>'我关注的',
	'favorite'=>'收藏',
	'favorite_in'=>'已收藏',
	'extitle'=>'金钱',
	'fans'=>'粉丝',
	'discussing'=>'参与',
	'spmyitem'=>'我的中心',
	're_album'=>'关联相册',
	'add_blacklist'=>'黑名单',
	'delete_black'=>'移除',
	'add_black'=>'拉黑',
	'ol_friend'=>'在线好友',
	'say_hi'=>'招呼',
	'no_function'=>'暂无此功能提供，欲看此信息请到电脑版',
	'no_logintip'=>'登录后才能使用此功能',
	'notime'=>'暂无',
	'photo_lastpost'=>'全部',
	'photo_dateline'=>'穿越',
	'photo_heats'=>'热门',
	'photo_digest'=>'精华',
	'photo_views'=>'热览',
	'photo_replies'=>'热回',
	'photo_newup'=>'新更',
	'photo_hot'=>'热图',
	'brilliant'=>'精彩',
	'message_password'=>'本帖为密码贴，继续阅读请用',
	'noreply'=>'暂不允许评论',
	'copyright'=>'版权所有',
	'pnpost'=>'发帖',
	'reply'=>'回复',
	'share'=>'分享',
	'sorts'=>'排序',
	'sorta'=>'新回复',
	'sortb'=>'新发布',
	'sortc'=>'回复数',
	'sortd'=>'浏览数',
	'newpost'=>'发表',
	'publish'=>'发布',
	'publishat'=>'发布于',
	'postbytime'=>'发表于',
	'recommend'=>'推荐',
	'filter'=>'筛选',
	'information'=>'信息',
	'posts_type'=>'类型',
	'post_descview'=>'倒序',
	'post_ascview'=>'正序',
	'orderheats'=>'热门',
	'sofas'=>'<p>暂无评论，点我抢沙发吧</p>',
	'sofas_b'=>'<p>暂无评论，赶紧抢沙发吧</p>',
	'sofas_c'=>'<p>暂无回答，点我抢沙发吧</p>',
	'sofas_d'=>'<p>暂无辩手，点我抢沙发吧</p>',
	'follows'=>'关注',
	'follows_m'=>'关注我',
	'nofollows'=>'已关注',
	'followsspecial'=>'特别关注',
	'nofollows_m'=>'取关',
	'delspecial'=>'取消特关',
	'yesfollowyou'=>'TA已关注你',
	'notfollowyou'=>'TA未关注你',
	'sayhello'=>'打招呼',	
	'join'=>'加入',
	'fillingin'=>'填入',
	'up_avatar'=>'头像',
	'taskapplycondition'=>'申请所需条件',
	'psw_security'=>'密码',
	'required'=>'必填项',
	'system'=>'系统',
	'qmenu'=>'我的导航',
	'musergroupsc'=>'可购买',
	'capacity'=>'道具包',
	'startreading'=>'点我阅读全部内容',
	'morereading'=>'点我查看详细内容',
	'nothreadsorts'=>'分类信息专用板块',
	'emailnot'=>'邮件地址错误',
	'textnot'=>'项目长度过长',
	'numbernot'=>'数字填写错误',
	'bignot'=>'大于最大值',
	'smallnot'=>'小于最小值',
	'urlnot'=>'以http://开头',
	'innot'=>'必填项目未填',
	'newpm'=>'有新消息',
	'clickinsert'=>'点我插入',
	'setcover'=>'选封面',
	'insert'=>'插入',
	'richtext'=>'富文本',		
	'video_link'=>'视频地址',
	'music_link'=>'音频地址',
	'links_link'=>'链接地址',
	'linkname_link'=>'链接文字',
	'img_link'=>'图片地址',	
	'iat'=>'用户账号',	
	'data_log'=>'记录',
	'credit_rule'=>'规则',	
	'credit_need'=>'用',
	'credit'=>'信用',
	'my_credit'=>'积分',
	'my_usergroup'=>'用户组',
	'my_userprofile_m'=>'改资料',
	'my_userprofile'=>'修改资料',
	'new_password_confirm'=>'确认密码',
	'security_answer'=>'回答提问',
	'nofunction'=>'手机端暂无此功能',
	'upimgtips'=>'选择一张图片后, 您可以继续选择图片',
	'groupimgfilesize'=>'建议使用高度不低于 300 的图片以取得最佳效果',
	'maxawardperweek'=>'奖励次数',
	'optionaldata'=>'必填资料',
	'modeone'=>'推广',
	'task_apply'=>'立即申请',
	'task_com'=>'立即开始',
	'task_full'=>'人数已满',
	'task_nope'=>'无法申请',
	'task_award'=>'领取奖励',
	'task_del'=>'放弃任务',
	'task_wait'=>'时间未到',
	'taskdoing'=>'进行中',
	'taskdone'=>'已完成',
	'taskfailed'=>'失败的',
	'amount'=>'数量',
	'dateline'=>'时间',
	'price'=>'价格',
	'award'=>'颁发',
	'honor'=>'荣誉',
	'description'=>'描述',
	'userstatus'=>'个人头衔',
	'option'=>'选项',
	'postadv'=>'进入高级模式?',
	'advmode'=>'高级模式',
	'rewardask'=>'悬赏问答',
	'rushreplylimit'=>'抢楼要求',
	'rushreplyend'=>'截止楼层',
	'participate'=>'才能参与',
	'setbestanswer'=>'选为答案',
	'clickto'=>'点击进入',
	'editalbuminfo'=>'编辑相册',
	'comefrom'=>'转载自',
	'supporters'=>'人给楼主点赞',
	'rewardeds'=>'人给楼主打赏',
	'interested'=>'你可能感兴趣的',
	'searchhot'=>'热门搜索',
	'favsuccess'=>'信息收藏成功',
	'oksuccess'=>'操作成功',
	'pollsucceed'=>'投票成功',
	'clicksuccess'=>'表态成功',	
	'vote'=>'投票',
	'voteing'=>'投票进行中',
	'browsednum'=>'浏览人数',
	'voteppnum'=>'投票人数',
	'votenum'=>'累计投票数',
	'voteprtp'=>'参与投票',
	'debateprtp'=>'参与辩论',
	'debaternum'=>'辩手人数',
	'point'=>'观点',
	'bothsides'=>'双方',
	'apply'=>'报名',
	'activity_type'=>'活动类型',
	'activity_space'=>'活动地点',
	'activity_dateline'=>'发布时间',
	'tradeselected'=>'已选',
	'tradetype'=>'类型',
	'tradenumber'=>'数量',
	'tradeselled'=>'已售',
	'trade'=>'出售',
	'shopexp'=>'铺子介绍',
	'leavemessage'=>'留言',
	'subjectprice'=>'此为付费主题，请进入贴内浏览',
	'subjectauth'=>'权限限制，请进入贴内浏览',
	'thecanplay'=>'才能播放',
	'paytoauthor'=>'需向作者支付',
	'payfreetime'=>'到期后免费',
	'viewreward'=>'赏',
	'viewsreward'=>'打赏',
	'buy'=>'购买',
	'payment'=>'支付',
	'tradebuy'=>'立即购买',
	'selecttrade'=>'选择商品',
	'addtrade'=>'添加',
	'tradedes'=>'商品说明',
	'friendtrade'=>'好友的商品',
	'eccreditlistall'=>'全部评价',
	'eccreditlistbuyer'=>'买家评价',
	'eccreditlistseller'=>'卖家评价',
	'eccreditlistother'=>'发出评价',
	'tradeinfo'=>'交易详情',
	'endtime'=>'截止',
	'neverexpires'=>'永久有效',
	'norights'=>'您的权限不足',
	'support'=>'点赞',
	'webcomments'=>'网友锐评',
	'signature'=>'签名',
	'feedsettings'=>'个人动态设置',
	'replycredit_member'=>'最多可得',
	'replycredit_rate'=>'中奖概率',
	'replycredit_empty'=>'留空或填 0 为不奖励',
	'inbalance'=>'余额不足',
	'tradeoffline'=>'线下交接',
	'pollmaxoption'=>'已达最多选项',
	'polloption'=>'投票项目',
	'remindnote'=>'注意事项',
	'thisis'=>'此为',
	'imgpollnote'=>'点选图片进行投票',
	'cost'=>'费用',
	'cloudmusic'=>'网易云音乐分享地址',
	'nocloudmusic'=>'您分享的云音乐不存在',
	'editnotice'=>'如果原内容是在电脑端发布的，在手机上编辑时可能会遗失某些格式。你确定要继续吗？',
	'certifiedphoto'=>'查看照片',
	'task_completed'=>'恭喜您，任务已成功完成，您将收到奖励通知，请注意查收',
	'share_browser'=>'使用浏览器的分享按钮<br />分享给好友哦',
	'pokemessage'=>'给对方留言, 最多 10 个字',
	'lastpost'=>'最后发表',
	'prank'=>'头衔',
	'psig'=>'签名',
	'pbio'=>'介绍',
	'phobby'=>'爱好',
	'pwrite'=>'写点东西吧',
	'pempty'=>'这人太懒, 啥也没留下',
	'sendemail'=>'邮件通知',
	'usergroupplus'=>'扩展组',
	'webage'=>'站龄',
	'greaterthan'=>'大于',
	'lessthan'=>'小于',
	'lesshalfyear'=>'小于半年',
	'lessyear'=>'小于一年',
	'days'=>'天',
	'years'=>'年',
	'month'=>'月',
	'day'=>'日',
	'hour'=>'时',
	'min'=>'分',
	'sec'=>'秒',
	'hours'=>'小时',
	'mins'=>'分钟',
	'oneweek'=>'1周',
	'onemonth'=>'1个月',
	'sixmonth'=>'6个月',
	'sixmonthago'=>'6个月前',
	'acceccredit'=>'累计信用',
	'selectdate'=>'选择日期',
	'confirm'=>'确认',
	'over'=>'结束',
	'alreadyover'=>'已结束',
	'contact'=>'联系',
	'login_now'=>'已有账号',
	'register_now'=>'注册账号',
	'perfectact'=>'完善账号',
	'bindingact'=>'绑定账号',
	'tplnofunction'=>'暂未开放此功能, 请关注模板更新',
	'warnfunction'=>'请到应用中心安装模板扩展, 或者关掉相关设置',
	'noplay'=>'暂不支持该地址, 请更换正确的分享地址',
	'autocutzoom'=>'图片会自动剪切并进行缩放',
	'goonpage'=>'滚动浏览或者点我返回第一页',
	'gobackpage'=>'这是最后一页点我返回第一页',
	'groupowner'=>'群主',
	'groupleader'=>'副群主',
	'starmembers'=>'明星成员',
	'ordmembers'=>'普通成员',
	'members'=>'成员',
	'kickout'=>'踢出',
	'joinsucceed'=>'成功加入',
	'exitsucceed'=>'成功退出',
	'quick'=>'快捷',
	'advanced'=>'高级',
	'searchmlist'=>'以下是查找到的用户列表, 最多显示 100 个',
	'ranklists'=>'排行榜',
	'rankuping'=>'热榜, 每',
	'rankuptime'=>'实时热榜, 每',	
	'rankupend'=>'小时更新一次',
	'rankdataing'=>'数据正在更新中',
	'datas'=>'数据',
	'shownote'=>'宣言',
	'shownotnote'=>'我要上榜',
	'picnoitd'=>'这个人很懒, 什么都没有写',
	'groupnoitd'=>'这个群主很懒, 什么都没有写',
	'groupwriteitd'=>'写群简介, 吸引更多成员加入!',
	'nomusicfiles'=>'无音乐文件',
	'information'=>'信息',
	'frommobilemess'=>'来自手机',
	'logon'=>'小主，您还未登录哦！',	
	'itab1'=>'小编推荐',
	'itab2'=>'人气最旺',
	'itab3'=>'猜你喜欢',	
	'vtab1'=>'最新发布',
	'vtab2'=>'热门推荐',
	'vtab3'=>'猜你喜欢',
	'vtab4'=>'相关推荐',	
	'ipassword'=>'密码',
	'ibuy'=>'售价',
	'ipasswordno'=>'无',
	'ihide'=>'回复可见',
	'iboy'=>'男',
	'igirl'=>'女',
	'imoney'=>'充值中心',
	'ihome1'=>'收藏的帖子文章版块',
	'ihome2'=>'快来成为VIP吧',
	'ihome3'=>'这个问题充钱就能解决',
	'ihome4'=>'所有主题都在这里哦',
	'ihome5'=>'编辑个人资料',
	'ifilter0'=>'默认排序',
	'ifilter1'=>'最新回复',
	'ifilter2'=>'发帖时间',
	'ifilter3'=>'最多回复',
	'ifilter4'=>'最多浏览',
	'allreply'=>'全部回复',
	'randomtext'=>'随机留言',
	'igold'=>'金币',
	'isubject'=>'发稿',
	'signin'=>'签到',
	'opening'=>'开通',
	'phot'=>'排行榜',	
	'nothtmltag'=>'<p class="nothtmltag">您的浏览器不支持 video 或 audio 标签</p>',	
	'load_pm'=>'<i class="rotation"></i>消息加载中',
	'more_pm'=>'<i class="vt-time"></i>点我查看更多消息',	
	'load'=>'<i class="rotation"></i>正在加载',
	'more'=>'加载更多',	
	'more_view'=>'查看更多',
	'allcontent'=>'<p>已显示全部内容</p>',
	'passwdnotmatch'=>'两次输入的密码不一致',
    );
?>