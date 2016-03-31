<?php
namespace app\config\code;

use common\config\BaseError;

class Error extends BaseError{
    /* 自动回复的业务逻辑错误 预留 30001 - 30100*/
    const RULE_CREATE_FAIL = 30001; //规则创建失败
    const RULE_DELETE_FAIL = 30002; //规则删除失败
    const RULE_UPDATE_FAIL = 30003; //规则更新失败
    const RULE_GET_SINGLE_FAIL = 30004; //获取单条规则失败
    const RULE_GET_LIST_FAIL = 30005; //获取规则列表失败
    const RULE_OPT_STATUS_FAIL = 30006; //开关操作失败
    const RULE_MAX_NUM_FAIL = 30007; //已达规则上限
    const RULE_NAME_LEN_FAIL = 30008; //规则名字过长
    const REPLY_KEYWORD_LEN_FAIL = 30009; //关键词过长
    const RULE_KEYWORD_NUM_FAIL = 30010; //关键词个数过多
    const RULE_REPLY_NUM_FAIL = 30011; //回复个数过多
    const RULE_TEXT_LEN_FAIL = 30012; //回复文本过长
    const RULE_CLOSE_FAIL = 30013; //停用失败
    const RULE_OPEN_FAIL = 30014; //启用失败
    const RULE_GET_STATUS_FAIL = 30015; //获取开关失败
    const REPLY_GET_LIST_FAIL = 30016; //获取回复列表失败
    const RULE_GET_COUNT_FAIL = 30017; //获取回复总数失败
    const REPLY_CREATE_FAIL = 30018; //创建回复失败
    const REPLY_DELETE_FAIL = 30019; //删除回复失败

    /* 自定义菜单与微信相关错误码 预留 30101 - 30200*/
    const CLOSE_MENU_STATUS_FAIL = 30101; //关闭失败，请稍后再试
    const READ_WX_MENU_FAIL = 30102; //读取推送到微信的json串失败
    const REPLY_TEXT_INVALID = 30103; //菜单自动回复文字不合法
    const MENU_URL_INVALID = 30104; //自定义菜单跳转url出错
    const MENU_NAME_INVALID = 30105; //自定义菜单名字超长
    const MENU_CHECK_FAIL = 30106; //自定义菜单输入数据错误
    const GET_QR_TICKET_FAIL = 30107; //获取二维码ticket失败
    const DELETE_MENU_FAIL = 30108; //删除数据库中菜单推送项失败
    const DEL_WX_MENU_FAIL = 30109; //删除微信自定义菜单失败
    const SAVE_WXINFO_FAIL = 30110; //插入或更新微信绑定信息失败
    const WX_INFO_WRONG = 30111; //用户输入的url和token出错
    const BIND_WX_APPID_FAIL = 30112; //微信AppID和AppSecret出错
    const GET_MENU_STATUS_FAIL = 30113; //获取菜单开关失败
    const DELETE_MENU_MATCH_FAIL = 30114; //删除微信菜单match表失败
    const OPEN_MENU_STATUS_FAIL = 30115; //开启失败，请稍后再试
    const MENU_STATUS_NOT_EXISTS = 30116; //菜单开关记录不存在
    const MENU_JSON_DATA_FORMAT_ERR = 30117; //菜单数据格式错误
    const GET_WX_INFO_FAIL = 30118; //获取微信信息失败
    const INSERT_WXINFO_FAIL = 30119; //插入微信的信息失败
    const UPDATE_WXINFO_FAIL = 30120; //更新微信的信息失败
    const DELETE_WXINFO_FAIL = 30121; //删除微信的信息失败
    const WXINFO_EXISTS = 30122; //微信的信息已经存在
    const CONVERT_PUSH_FAIL = 30123; //自定义菜单转换成推送格式失败
    const SUBBUTTON_NUM_ERROR = 30124; //子菜单不能超过五个
    const BUTTON_NUM_ERROR = 30125; //父菜单不能超过三个
    const SAVE_MENU_MATCH_FAIL = 30126; //数据库保存菜单细节失败
    const MENU_CLOSED = 30127; //自定义菜单处于关闭状态，菜单内容不生效，请开启后再发布
    const READ_MENU_FAIL = 30128; //读取自定义菜单失败
    const PUSH_MENU_FAIL = 30129; //推送自定义菜单到微信失败
    const SAVE_MENU_FAIL = 30130; //数据库保存自定义菜单失败
    const WX_CURL_ERROR = 30131; //curl请求错误
    const WX_ACCESSTOKEN_ERROR = 30132; //微信accessToken错误
    const DELETE_WX_TOKEN_FAIL = 30133; //删除微信的accessToken失败
    const MENU_PUSH_EMPTY = 30134; //发布的自定义菜单为空
    const PARSE_WXSUB_FAIL = 30135; //三类服务号获取微信关注者失败
    const DELETE_WXCUSTOMER_FAIL = 30136;//删除客户库的微信类型客户失败
    const REFRESH_MID_FAIL = 30137;//刷新mid失败
    const NO_WX_MANUAL_AUTH = 30138;//没有微信人工客服权限
    const CDISP_STATIC_NOTIFY_FAIL = 30139;

    const IS_KFUIN_WXINFO_BOUND_FAIL = 30140;//检查主号是否绑定微信失败
    const IS_KFUIN_WXINFO_BOUND = 30141;//主号已经绑定了微信，无法再次绑定
    const IS_WXINFO_USED_FAIL = 30142;//检查微信信息是否被绑定失败
    const IS_WXINFO_USED_IN2 = 30143;//微信帐号已经被别处绑定，请解绑后再绑定
    const IS_WXINFO_USED_IN3 = 30144;//微信帐号已经被别处绑定，请解绑后再绑定

    const WX_GET_USER_LIST_FAIL = 30145;//获取微信用户列表失败

    const CHECK_IS_FULL_FAIL = 30146;//检查是否超限失败
    const CB_IS_FULL = 30147;//客户库已满
    const CHECK_WX_NORMAL_FAIL = 30148;//检查微信状态失败

    /* 素材相关错误码 预留 30201 - 30300*/
    const MATERIAL_CAT_LIST_DB_FAIL = 30201; //拉图文分类列表db查询失败
    const MATERIAL_CAT_ADD_DB_FAIL = 30202; //增加图文分类db执行失败
    const MATERIAL_CAT_UPDATE_DB_FAIL = 30203; //修改图文分类db执行失败
    const MATERIAL_CAT_DELETE_DB_FAIL = 30204; //删除图文分类db执行失败
    const MATERIAL_IMG_LIST_DB_FAIL = 30205; //拉图片列表db查询失败
    const MATERIAL_IMG_COUNT_DB_FAIL = 30206; //拉图片总量db查询失败
    const MATERIAL_IMG_LIST_BYID_DB_FAIL = 30207; //get imglist by id db查询失败
    const MATERIAL_IMG_DOWNLOAD_PIC_FAIL = 30208;  //下载图片失败
    const MATERIAL_IMG_SEND_TO_QQ_FAIL = 30209; //图片推到手Q失败
    const MATERIAL_IMG_SEND_TO_WX_FAIL = 30210; //图片推到微信失败
    const MATERIAL_IMG_ADD_DB_FAIL = 30211; //增加图片db执行失败
    const MATERIAL_IMG_UPDATE_DB_FAIL = 30212; //修改图片db执行失败
    const MATERIAL_IMG_DELETE_DB_FAIL = 30213; //删除图片db执行失败
    const MATERIAL_TXT_LIST_DB_FAIL = 30214; //拉图文列表db查询失败
    const MATERIAL_TXT_COUNT_DB_FAIL = 30215; //拉图文总量db查询失败
    const MATERIAL_TXT_LIST_BYID_DB_FAIL = 30216; //get img txt list by id db查询失败
    const MATERIAL_TXT_LIST_BYID_THUM_DB_FAIL = 30217; //get img brief list by id db查询失败
    const MATERIAL_TXT_COUNT_CAT_DB_FAIL = 30218; //计算分类数db查询失败
    const MATERIAL_TXT_ADD_DB_FAIL = 30219; //增加图文db执行失败
    const MATERIAL_TXT_UPDATE_DB_FAIL = 30220; //修改图文db执行失败
    const MATERIAL_TXT_DELETE_DB_FAIL = 30221; //删除图文db执行失败
    const MATERIAL_TXT_MODIFY_CAT_DB_FAIL = 30222; //批量修改图文分类db执行失败
    const MATERIAL_TXT_PREVIEW_FAIL = 30223; //预览图文失败
    const MATERIAL_TXT_ARTICLE_COUNT_EXCEED = 30224;//文章超过10条
    const MATERIAL_TXT_SUMMARY_WORDS_EXCEED = 30225;//摘要字数超出
    const MATERIAL_TXT_DESC_WORDS_EXCEED = 30226;//正文字数超出
    const MATERIAL_TXT_SET_WX_JSON_FAIL = 30227;//ckv设置微信Json串失败
    const MATERIAL_TXT_SET_WX_XML_FAIL = 30228;//ckv设置微信xml串失败
    const MATERIAL_TXT_SET_QQ_XML_FAIL = 30229;//ckv设置手Qxml串失败
    const MATERIAL_TXT_PREVIEW_NOFRIEND_FAIL = 30230;//预览失败，非好友关系
    const MATERIAL_TXT_UPLOAD_LONG_MSG_FAIL = 30232;//上传图文消息失败
    const MATERIAL_TXT_SAVE_WA_FAIL = 30231;//预览失败，非好友关系
    const MATERIAL_TXT_SAVE_DRAFT_FAIL = 30232;//保存图文草稿失败
    const MATERIAL_TXT_DELELT_DRAFT_FAIL = 30233;//删除图文草稿失败
    const MATERIAL_TXT_SET_ARTICLE_FAIL = 30234;//ckv设置图文正文失败
    const MATERIAL_TXT_GET_ARTICLE_FAIL = 30235;//ckv设置图文正文失败
    const MP_GET_IMGTXT_TRACE_FAIL = 30236;//获取图文轨迹失败
    /* 图片上传组件错误码 预留 30301 - 30400*/
    const PIC_FILE_ERR = 30301;
    const PIC_ERR = 30302;
    const PIC_SIZE_ERR = 30303;
    const PIC_TYPE_ERR = 30304;


    /* 微官网错误码 预留 30501 - 30600*/
    const MOBILESITE_SOURCE_ERR = 30501;  //拉微官网来源失败
    const MOBILESITE_MSG_COUNT_DB_FAIL = 30502; //拉微官网活动总量db查询失败
    const MOBILESITE_MSG_LIST_DB_FAIL = 30503; //拉微官网活动列表查询失败
    const MOBILESITE_COUNT_DB_FAIL = 30504; //拉取微官网数目失败
    const MOBILESITE_LIST_DB_FAIL = 30505; //拉微官网列表失败
    const MOBILESITE_KFUIN_SET_FAIL = 30506; //设置微官网来源失败
    const MOBILESITE_KFUIN_GET_FAIL = 30507; //获取微官网来源失败
    const MOBILESITE_WGW_GET_FAIL = 30508; //获取微官网信息失败
    const MOBILESITE_ABILITY_GET_FAIL = 30509; //获取能力失败
    const MOBILESITE_PRIVILEGE_GET_FAIL = 30510;//获取企业权限失败
    const MOBILESITE_CORPDETAIL_GET_FAIL = 30511;   //获取企业详细信息失败
    const MOBILESITE_MPINFO_GET_FAIL = 30512; //获取主号微信信息失败
    const MOBILESITE_PARTERNERTOKEN_GET_FAIL = 30513; //获取第三方token失败
    const MOBILESITE_PARTERNERUIN_GET_FAIL = 30514; //获取第三方返回UIN失败
    const MOBILESITE_MSG_DELETE_DB_FAIL = 30515; //从db中删除活动失败
    const MOBILESITE_MSG_GET_DB_FAIL = 30516; //拉单个微官网活动失败
    const MOBILESITE_NOT_SET_FAIL = 30517; //未设置过微官网，
//    const PIC_ERR = 30302;
//    const PIC_SIZE_ERR = 30303;
//    const PIC_TYPE_ERR = 30304;




    /* 群发相关错误码 30401-30500*/
    const GET_FULL_USER_LIST_FAIL = 30401;//客户库根据条件获取客户列表失败
    const CB_SEARCH_CURL_ERROR = 30402;// 客户库搜索curl失败
    const CB_ADVANCED_SEARCH_FAIL = 30403;// 客户库高级搜索失败
    const CB_GET_ADVANCED_FULL_LIST_FAIL = 30404;// 客户库高级搜索获取用户列表失败
    const CB_GET_KEYWORD_FULL_LIST_FAIL = 30405;// 客户库关键词搜索获取用户列表失败
    const CB_KEYWORD_SEARCH_FAIL = 30406;// 客户库关键词搜索失败
    const UPLOAD_QQLIST_FAIL = 30407;//上传QQ List失败
    const IMGTXT_SNAPSHOT_FAIL = 30408;//图文快照失败
    const IMG_SNAPSHOT_FAIL = 30409;//图片快照失败
    const GET_IMGTXT_SNAPSHOT_FAIL = 30410; //获取图文快照失败
    const UPLOAD_IMGTXT_FAIL = 30411; //上传图文失败
    const GENERATE_QFIMGTXT_FAIL = 30412;//创建群发的图文失败了  c
    const QF_LIST_EMPTY = 30413; //群发列表为空
    const WX_CREATE_QF_TXT_FAIL = 30414;//插入微信群发的文字类型失败
    const QQ_CREATE_QF_TXT_FAIL = 30414;//插入QQ群发的文字类型失败
    const RECORD_QF_FILTER_FAIL = 30415;//记录群发过滤条件失败
    const CREATE_QF_DISPLAY_FAIL = 30416;//创建群发展示主表失败
    const WX_CREATE_QF_IMG_FAIL = 30417;//插入微信群发的图片类型失败
    const QQ_CREATE_QF_IMG_FAIL = 30418;//插入QQ群发的图片类型失败
    const WX_CREATE_QF_IMGTXT_FAIL = 30419;//插入微信群发的图文类型失败
    const QQ_CREATE_QF_IMGTXT_FAIL = 30420;//插入QQ群发的图文类型失败
    const UPLOAD_THUMBIMG_FAIL = 30421;//上传缩略图失败
    const CB_GET_ADVANCED_COUNT_FAIL = 30422;//获取高级搜索人数失败
    const CB_GET_USER_COUNT_FAIL = 30423;//获取用户总数失败
    const GET_UPDATEID_FAIL = 30424;//获取更新ID失败
    const UPDATE_QF_DISPLAY_FAIL = 30425;//更新群发展示表失败
    const DELETE_QFIMGTXT_FAIL = 30426;//删除群发的图文失败
    const WX_UPDATE_QF_IMGTXT_FAIL = 30427; //微信更新群发图文失败
    const DELETE_QFIMG_FAIL = 30428; //删除群发图像失败
    const WX_UPDATE_QF_IMG_FAIL = 30429;//微信更新群发图片失败
    const WX_UPDATE_QF_TXT_FAIL = 30430;//微信更新群发文字失败
    const UPDATE_QF_FILTER_FAIL = 30431;//更新群发的过滤表失败
    const GET_QF_FILTER_FAIL = 30432;//获取群发过滤失败
    const CB_GROUP_GET_BY_ID_DB_FAIL = 30433;//获取分组名失败
    const CB_LABEL_GET_BY_ID_DB_FAIL = 30434;//获取标签名失败
    const GET_QF_CONTENT_FAIL = 30435;//获取群发内容失败
    const GET_IMG_SNAPSHOT_FAIL = 30436;//获取图像失败
    const UPDATE_QF_STATUS_FAIL = 30437;//更新群发状态失败
    const DELETE_QF_FAIL = 30438;//删除群发失败
    const GET_QF_COUNT_FAIL = 30439;//获取群发总数失败
    const GET_QF_DISPLAY_FAIL = 30440;//获取群发展示失败
    const GET_IMG_INFO_FAIL = 30441;//获取图像信息失败
    const TEAR_WX_LIST_FAIL = 30442;//拆分微信列表失败
    const QQ_UPDATE_QF_TXT_FAIL = 30443;//qq更新群发文字失败
    const QQ_UPDATE_QF_IMG_FAIL = 30444;//qq更新群发图片失败
    const QQ_UPDATE_QF_IMGTXT_FAIL = 30445;//qq更新群发图文失败
    const GET_QF_MATERIAL_INFO_FAIL = 30446;//获取群发材料信息失败
    const CHECK_QF_STATUS_FAIL = 30447;//检查群发状态失败
    const QF_STATUS_CHANGE = 30448;//群发状态已变化
    const WX_AUTH_FAIL = 30449;//微信权限不足
    const CREATE_QF_COMMON_FAIL = 30450;//统一创建群发失败
    const UPDATE_QF_COMMON_FAIL = 30451;//统一更新群发失败
    const GET_COMPANY_QF_QUALITY_FAIL = 30452;//获取企业群发资质失败
    const CB_PLANNED_TIME_INVALID = 30453;//预约时间在当前时间之前
    const GET_QF_MONEY_FAIL = 30454;//获取群发金额失败
    const UPDATE_IMAGETXT_SNAPSHOT_FAIL = 30455;//更新图文快照失败
    const CB_CHECK_RELATION_FAIL = 30456;//群发检查关系链失败
    const GET_QQ_QF_INFO_FAIL = 30457;//获取QQ群发信息失败
    const QF_MONEY_NOT_ENOUGH = 30458;//群发剩余条数不足，请充值后发送

    /* 群发审核相关错误码 30601-30600*/
    const GET_CORP_INFO_FAIL = 30601;//获取企业信息失败
    const GET_TO_SEND_ITEM_FAIL = 30602;//获取待审群发内容失败
    const GET_QF_HISTORY_FAIL = 30603;//获取群发历史失败
    const QF_TOSEND_PASS_FAIL = 30604;//群发待发通过失败
    const QF_VERIFY_VERSION_NOT_VALID = 30605;//群发审核版本号不合法
    const QF_CHECK_VERSION_FAIL = 30606;//群发检查版本号失败
    const QF_VERIFY_FAIL = 30607;//群发审核状态失败
    const QF_RECORD_VERIFY_HISTORY_FAIL = 30608;//群发审核记录历史失败
    const QF_PROMOTE_QUALIFICATION_FAIL = 30609;//提高公司资质失败
    const QF_TOSEND_REJECT_FAIL = 30610;//待发审核拒绝
    const QF_LOWER_QUALIFICATION_FAIL = 30611;//群发降低资质
    const GET_SENDED_ITEM_FAIL  = 30612;//获取已发审核失败
    const QF_SENDED_PASS_FAIL = 30613;//已发审核通过失败
    const QF_CLEAR_QQ_TRACE_FAIL = 30614;//群发QQ撤回失败
    const QF_SAVE_HTML_FAIL = 30615;//群发保存静态页面失败
    const QF_WITHDRAW_WAP_FAIL = 30616;//群发撤回wap页失败
    const QF_INSERT_SINGLE_IMGTXT_FAIL = 30617;//群发插入单图文失败
    const QF_GET_VERIFY_LIST_FAIL = 30618;//获取审核列表失败
    const GET_QF_VERIFY_COUNT_FAIL = 30619;//群发获取审核条目失败
    const GET_QF_VERIFY_LIST_FAIL = 30620;//群发获取审核列表失败
    const QF_GET_LIST_DETAIL_FAIL = 30621;//群发列表页获取详情失败
    const QF_GET_SINGLE_IMGTXT_STATUS_FAIL = 30622;//群发获取单个图文状态失败
    const QF_GET_VERIFY_COUNT_FAIL = 30623;//群发获取列表人数失败
    const GET_PLANNED_TIME_FAILED = 30624;//获取预约时间失败
    const QF_GET_TO_SEND_TOTAL_FAIL = 30625;//获取待发总数失败
    const QF_GET_SENDED_TOTAL_FAIL = 30626;//获取已发总数失败
    const QF_DIRTY_WORD_FOUND = 30627;//群发发现敏感词
    const NO_WX_MENU_AUTH = 30628;//没有微信菜单的权限
    const GET_QF_VERIFY_REASON_FAIL = 30629;//获取群发审核原因失败
    const SET_QF_MONEY_FAIL = 30630;//设置群发金额失败
    const PREVIEW_NO_RELATION = 30631;//预览无好友关系
    const CHARGE_QF_MONEY_FAIL = 30632;//设置群发金额失败

    /* 聊天窗口设置的错误 */
    const WPA_STATIC_NOTIFY_FAIL = 30807;
    const MPS_UPDATE_CORP_IMAGE_FAIL = 30100;
    const MPS_CORP_IMAGE_IS_UNDER_VERIFICATION = 30101;

    /* 错误消息定义 */
    protected static $errorMessages = array(
        self::RULE_CREATE_FAIL => '规则创建失败',
        self::RULE_DELETE_FAIL => '规则删除失败',
        self::RULE_UPDATE_FAIL => '规则更新失败',
        self::RULE_GET_SINGLE_FAIL => '获取单条规则失败',
        self::RULE_GET_LIST_FAIL => '获取规则列表失败',
        self::RULE_OPT_STATUS_FAIL => '开关操作失败',
        self::RULE_MAX_NUM_FAIL => '已达规则上限',
        self::RULE_NAME_LEN_FAIL => '规则名字过长',
        self::REPLY_KEYWORD_LEN_FAIL => '关键词过长',
        self::RULE_KEYWORD_NUM_FAIL => '关键词个数过多',
        self::RULE_REPLY_NUM_FAIL => '回复个数过多',
        self::RULE_TEXT_LEN_FAIL => '回复文本过长',
        self::RULE_CLOSE_FAIL => '停用失败',
        self::RULE_OPEN_FAIL => '启用失败',
        self::RULE_GET_STATUS_FAIL => '获取开关失败',
        self::REPLY_GET_LIST_FAIL => '获取回复列表失败',
        self::RULE_GET_COUNT_FAIL => '获取规则总数失败',
        self::REPLY_CREATE_FAIL => '创建回复失败',
        self::REPLY_DELETE_FAIL => '删除回复失败',
        self::PUSH_MENU_FAIL => '推送自定义菜单到微信失败',
        self::SAVE_MENU_FAIL =>'数据库保存自定义菜单失败',
        self::READ_MENU_FAIL => '读取自定义菜单失败',
        self::MENU_CLOSED => '自定义菜单处于关闭状态，菜单内容不生效，请开启后再发布',
        self::SAVE_MENU_MATCH_FAIL => '数据库保存菜单细节失败',
        self::SUBBUTTON_NUM_ERROR => '子菜单不能超过五个',
        self::BUTTON_NUM_ERROR => '父菜单不能超过三个',
        self::CONVERT_PUSH_FAIL => '自定义菜单转换成推送格式失败',
        self::GET_MENU_STATUS_FAIL => '获取菜单开关失败',
        self::MENU_STATUS_NOT_EXISTS => '菜单开关记录不存在',
        self::MENU_JSON_DATA_FORMAT_ERR => '菜单数据格式错误',
        self::GET_WX_INFO_FAIL => '获取微信信息失败',
        self::INSERT_WXINFO_FAIL => '插入微信的信息失败',
        self::UPDATE_WXINFO_FAIL => '更新微信的信息失败',
        self::DELETE_WXINFO_FAIL => '删除微信的信息失败',
        self::WXINFO_EXISTS => '微信的信息已经存在',
        self::PIC_FILE_ERR => '上传文件错误',
        self::PIC_ERR => '图片太大或格式错误',
        self::PIC_SIZE_ERR => '图片太大',
        self::MATERIAL_CAT_LIST_DB_FAIL => '拉取图文分类列表失败',
        self::MATERIAL_CAT_ADD_DB_FAIL => '增加图文分类失败',
        self::MATERIAL_CAT_UPDATE_DB_FAIL => '修改图文分类失败',
        self::MATERIAL_CAT_DELETE_DB_FAIL => '删除图文分类失败',
        self::MATERIAL_IMG_LIST_DB_FAIL => '拉取图片列表失败',
        self::MATERIAL_IMG_COUNT_DB_FAIL => '拉取图片数量失败',
        self::MATERIAL_IMG_LIST_BYID_DB_FAIL => '拉取图片列表失败',
        self::MATERIAL_IMG_DOWNLOAD_PIC_FAIL => '下载图片失败',
        self::MATERIAL_IMG_SEND_TO_QQ_FAIL => '图片推到手Q失败',
        self::MATERIAL_IMG_SEND_TO_WX_FAIL => '图片推到微信失败',
        self::MATERIAL_IMG_ADD_DB_FAIL => '增加图片db执行失败',
        self::MATERIAL_IMG_UPDATE_DB_FAIL => '修改图片db执行失败',
        self::MATERIAL_IMG_DELETE_DB_FAIL => '删除图片db执行失败',
        self::MATERIAL_TXT_LIST_DB_FAIL => '拉图文列表失败',
        self::MATERIAL_TXT_COUNT_DB_FAIL => '拉图文总量失败',
        self::MATERIAL_TXT_LIST_BYID_DB_FAIL => '拉图文列表失败',
        self::MATERIAL_TXT_LIST_BYID_THUM_DB_FAIL => '拉图文列表失败',
        self::MATERIAL_TXT_COUNT_CAT_DB_FAIL => '拉取分类图文数量失败',
        self::MATERIAL_TXT_ADD_DB_FAIL => '增加图文失败',
        self::MATERIAL_TXT_UPDATE_DB_FAIL => '修改图文失败',
        self::MATERIAL_TXT_DELETE_DB_FAIL => '删除图文失败',
        self::MATERIAL_TXT_MODIFY_CAT_DB_FAIL => '批量修改图文分类失败',
        self::MATERIAL_TXT_PREVIEW_FAIL => '预览图文失败',
        self::MATERIAL_TXT_UPLOAD_LONG_MSG_FAIL=>'上传图文消息失败',
        self::WX_INFO_WRONG => '用户输入的url和token出错',
        self::SAVE_WXINFO_FAIL => '插入或更新微信绑定信息失败',
        self::DEL_WX_MENU_FAIL => '删除微信自定义菜单失败',
        self::DELETE_MENU_FAIL => '删除数据库中菜单推送项失败',
        self::MATERIAL_TXT_ARTICLE_COUNT_EXCEED => '文章条数过多',
        self::MATERIAL_TXT_SUMMARY_WORDS_EXCEED => '摘要字数过多',
        self::MATERIAL_TXT_DESC_WORDS_EXCEED => '正文长度超出',
        self::GET_QR_TICKET_FAIL => '获取二维码ticket失败',
        self::MENU_CHECK_FAIL => '自定义菜单输入数据错误',
        self::BIND_WX_APPID_FAIL => '微信AppID和AppSecret出错',
        self::MENU_NAME_INVALID => '自定义菜单名字超长',
        self::MENU_URL_INVALID => '自定义菜单跳转url出错',
        self::REPLY_TEXT_INVALID => '菜单自动回复文字过长',
        self::READ_WX_MENU_FAIL => '读取推送到微信的json串失败',
        self::OPEN_MENU_STATUS_FAIL => '开启失败，请稍后再试',
        self::CLOSE_MENU_STATUS_FAIL => '关闭失败，请稍后再试',
        self::DELETE_WX_TOKEN_FAIL => '删除微信的accessToken失败',
        self::DELETE_MENU_MATCH_FAIL => '删除微信菜单match表失败',
        self::WX_CURL_ERROR => 'curl请求错误',
        self::WX_ACCESSTOKEN_ERROR => '微信accessToken错误',
        self::MENU_PUSH_EMPTY => '发布的自定义菜单为空',
        self::MATERIAL_TXT_SET_WX_JSON_FAIL => 'ckv设置微信Json串失败',
        self::MATERIAL_TXT_SET_WX_XML_FAIL => 'ckv设置微信xml串失败',
        self::MATERIAL_TXT_SET_QQ_XML_FAIL => 'ckv设置手Qxml串失败',
        self::MATERIAL_TXT_PREVIEW_NOFRIEND_FAIL => '该qq号码需要先关注服务号',
        self::PARSE_WXSUB_FAIL => '三类服务号获取微信关注者失败',
        self::DELETE_WXCUSTOMER_FAIL => '删除客户库微信类型客户失败',
        self::REFRESH_MID_FAIL => '刷新mid失败',

        self::MOBILESITE_SOURCE_ERR => '微官网来源为0或者为空',
        self::MOBILESITE_MSG_COUNT_DB_FAIL => '拉微官网活动总量db查询失败',
        self::MOBILESITE_MSG_LIST_DB_FAIL => '拉微官网活动列表查询失败',
        self::MOBILESITE_COUNT_DB_FAIL => '拉取微官网数目失败',
        self::MOBILESITE_LIST_DB_FAIL => '拉微官网列表失败',
        self::MOBILESITE_KFUIN_SET_FAIL => '设置微官网来源失败',
        self::MOBILESITE_KFUIN_GET_FAIL => '获取微官网来源失败',
        self::MOBILESITE_WGW_GET_FAIL => '获取微官网信息失败',
        self::MOBILESITE_PRIVILEGE_GET_FAIL => '获取企业权限失败',
        self::MOBILESITE_ABILITY_GET_FAIL => '获取企业能力失败',
        self::MOBILESITE_CORPDETAIL_GET_FAIL => '获取企业详细信息失败',
        self::MOBILESITE_MPINFO_GET_FAIL => '获取主号微信信息失败',
        self::MOBILESITE_PARTERNERTOKEN_GET_FAIL => '获取第三方token失败',
        self::MOBILESITE_PARTERNERUIN_GET_FAIL => '获取第三方返回UIN失败',
        self::MOBILESITE_MSG_DELETE_DB_FAIL => '从db中删除活动失败',
        self::MOBILESITE_MSG_GET_DB_FAIL => '拉微官网单个活动失败',
        self::MOBILESITE_NOT_SET_FAIL => '未设置过微官网',

        self::GET_FULL_USER_LIST_FAIL => '客户库根据条件获取客户列表失败',
        self::CB_SEARCH_CURL_ERROR => '客户库搜索curl失败',
        self::CB_ADVANCED_SEARCH_FAIL => '客户库高级搜索失败',
        self::CB_KEYWORD_SEARCH_FAIL => '客户库关键词搜索失败',
        self::CB_GET_ADVANCED_FULL_LIST_FAIL => '客户库高级搜索获取列表失败',
        self::CB_GET_KEYWORD_FULL_LIST_FAIL => '客户库关键词搜索获取用户列表失败',
        self::UPLOAD_QQLIST_FAIL => '上传QQ List失败',
        self::IMGTXT_SNAPSHOT_FAIL => '图文快照失败',
        self::IMG_SNAPSHOT_FAIL => '图片快照失败',
        self::GET_IMGTXT_SNAPSHOT_FAIL => '获取图文快照失败',
        self::UPLOAD_IMGTXT_FAIL=> '上传图文失败',
        self::GENERATE_QFIMGTXT_FAIL => '创建群发的图文失败了',
        self::QF_LIST_EMPTY => '群发列表为空',
        self::WX_CREATE_QF_TXT_FAIL => '插入微信群发的文字类型失败',
        self::QQ_CREATE_QF_TXT_FAIL => '插入QQ群发的文字类型失败',
        self::RECORD_QF_FILTER_FAIL => '记录群发过滤条件失败',
        self::CREATE_QF_DISPLAY_FAIL => '创建群发展示主表失败',
        self::QQ_CREATE_QF_IMG_FAIL => '插入QQ群发的图片类型失败',
        self::WX_CREATE_QF_IMG_FAIL => '插入微信群发的图片类型失败',
        self::WX_CREATE_QF_IMGTXT_FAIL => '插入微信群发的图文类型失败',
        self::QQ_CREATE_QF_IMGTXT_FAIL => '插入QQ群发的图文类型失败',
        self::UPLOAD_THUMBIMG_FAIL => '上传缩略图失败',
        self::CB_GET_ADVANCED_COUNT_FAIL => '获取高级搜索人数失败',
        self::CB_GET_USER_COUNT_FAIL => '获取用户总数失败',
        self::GET_UPDATEID_FAIL => '获取更新ID失败',
        self::UPDATE_QF_DISPLAY_FAIL => '更新群发展示表失败',
        self::DELETE_QFIMGTXT_FAIL => '删除群发的图文失败',
        self::WX_UPDATE_QF_IMGTXT_FAIL => '微信更新群发图文失败',
        self::DELETE_QFIMG_FAIL => '删除微信图像失败',
        self::WX_UPDATE_QF_IMG_FAIL => '微信更新群发图片失败',
        self::WX_UPDATE_QF_TXT_FAIL => '微信更新群发文字失败',
        self::UPDATE_QF_FILTER_FAIL => '更新群发的过滤表失败',
        self::GET_QF_FILTER_FAIL =>'获取群发过滤失败',
        self::CB_GROUP_GET_BY_ID_DB_FAIL => '获取分组名失败',
        self::CB_LABEL_GET_BY_ID_DB_FAIL => '获取标签名失败',
        self::GET_QF_CONTENT_FAIL => '获取群发内容失败',
        self::GET_IMG_SNAPSHOT_FAIL => '获取图像失败',
        self::UPDATE_QF_STATUS_FAIL => '更新群发状态失败',
        self::DELETE_QF_FAIL => '删除群发失败',
        self::GET_QF_DISPLAY_FAIL => '获取群发展示失败',
        self::GET_QF_COUNT_FAIL => '获取群发总数失败',
        self::GET_IMG_INFO_FAIL => '获取图像信息失败',
        self::TEAR_WX_LIST_FAIL => '拆分微信列表失败',
        self::QQ_UPDATE_QF_TXT_FAIL => 'qq更新群发文字失败',
        self::QQ_UPDATE_QF_IMG_FAIL => 'qq更新群发图片失败',
        self::QQ_UPDATE_QF_IMGTXT_FAIL => 'qq更新群发图文失败',
        self::GET_QF_MATERIAL_INFO_FAIL => '获取群发材料信息失败',
        self::CHECK_QF_STATUS_FAIL => '检查群发状态失败',
        self::QF_STATUS_CHANGE => '群发状态已变化',
        self::WX_AUTH_FAIL => '微信权限不足',
        self::CREATE_QF_COMMON_FAIL => '统一创建群发失败',
        self::UPDATE_QF_COMMON_FAIL => '统一更新群发失败',
        self::GET_COMPANY_QF_QUALITY_FAIL => '获取企业群发资质失败',
        self::GET_QQ_QF_INFO_FAIL => '获取QQ群发信息失败',


        self::GET_CORP_INFO_FAIL => '获取企业信息失败',
        self::GET_TO_SEND_ITEM_FAIL => '获取先审群发内容失败',
        self::GET_QF_HISTORY_FAIL => '获取群发历史失败',
        self::QF_TOSEND_PASS_FAIL => '群发待发通过失败',
        self::QF_VERIFY_VERSION_NOT_VALID => '群发审核版本号不合法',
        self::QF_CHECK_VERSION_FAIL => '群发检查版本号失败',
        self::QF_VERIFY_FAIL => '群发审核状态失败',
        self::QF_RECORD_VERIFY_HISTORY_FAIL => '群发记录历史失败',
        self::QF_PROMOTE_QUALIFICATION_FAIL => '提高公司资质失败',
        self::QF_TOSEND_REJECT_FAIL => '待发审核拒绝',
        self::QF_LOWER_QUALIFICATION_FAIL => '群发降低资质',
        self::GET_SENDED_ITEM_FAIL => '获取已发审核失败',
        self::QF_SENDED_PASS_FAIL => '已发审核通过失败',
        self::QF_CLEAR_QQ_TRACE_FAIL => '群发QQ撤回失败',
        self::QF_SAVE_HTML_FAIL => '群发保存静态页面失败',
        self::QF_WITHDRAW_WAP_FAIL => '群发撤回wap页失败',
        self::QF_INSERT_SINGLE_IMGTXT_FAIL => '群发插入单图文失败',
        self::QF_GET_VERIFY_LIST_FAIL => '群发获取审核列表失败',
        self::GET_QF_VERIFY_COUNT_FAIL => '群发获取审核条目失败',
        self::GET_QF_VERIFY_LIST_FAIL => '群发获取审核列表失败',
        self::QF_GET_LIST_DETAIL_FAIL => '群发列表页获取详情失败',
        self::QF_GET_SINGLE_IMGTXT_STATUS_FAIL => '群发获取单个图文状态失败',
        self::QF_GET_VERIFY_COUNT_FAIL => '群发获取列表人数失败',
        self::GET_PLANNED_TIME_FAILED => '获取预约时间失败',
        self::QF_GET_SENDED_TOTAL_FAIL => '获取已发总数失败',
        self::QF_GET_TO_SEND_TOTAL_FAIL => '获取待发总数失败',
        self::QF_DIRTY_WORD_FOUND => '群发内容包含敏感信息，请重新输入',
        self::NO_WX_MENU_AUTH => '您尚未在账户设置中绑定微信公众账号或公众号权限不足，因此本次发布只更新QQ菜单。',
        self::NO_WX_MANUAL_AUTH => '“人工客服”功能未能发布至微信菜单！您的微信公众号没有人工客服权限！',
        self::GET_QF_VERIFY_REASON_FAIL => '获取群发审核原因失败',
        self::CB_PLANNED_TIME_INVALID => '预约时间不合法，早于当前时间',
        self::GET_QF_MONEY_FAIL => '获取群发金额失败',
        self::SET_QF_MONEY_FAIL => '设置群发金额失败',
        self::CDISP_STATIC_NOTIFY_FAIL => '刷新aio菜单失败',
        self::PREVIEW_NO_RELATION => '所填QQ未关注主号，无法预览',
        self::CB_CHECK_RELATION_FAIL => '客户库检查关系链失败',
        self::QF_MONEY_NOT_ENOUGH => '群发剩余条数不足，请充值后发送',

        // 聊天窗口设置的错误文本
        self::WPA_STATIC_NOTIFY_FAIL=>'推送到静态服务器失败',
        self::MPS_UPDATE_CORP_IMAGE_FAIL=>'更新企业对外形象失败',

        self::MPS_CORP_IMAGE_IS_UNDER_VERIFICATION=>'企业形象正在审核中',
        self::CHARGE_QF_MONEY_FAIL => '设置群发金额失败',

        self::IS_KFUIN_WXINFO_BOUND_FAIL => '检查主号是否绑定微信失败',
        self::IS_KFUIN_WXINFO_BOUND => '主号已经绑定了微信，无法再次绑定',
        self::IS_WXINFO_USED_FAIL => 'IS_WXINFO_USED_FAIL',
        self::IS_WXINFO_USED_IN2 => '微信公众号已经绑定了其他的营销QQ，请检查后重试',
        self::IS_WXINFO_USED_IN3 => '微信公众号已经绑定了其他的营销QQ，请检查后重试',

        self::WX_GET_USER_LIST_FAIL => '获取微信用户列表失败',
        self::CHECK_IS_FULL_FAIL => '检查微信人数是否超限失败',
        self::CB_IS_FULL => '客户库已满，无法再添加客户',
        self::CHECK_WX_NORMAL_FAIL => '检查微信状态是否正常失败',
        self::MATERIAL_TXT_SAVE_DRAFT_FAIL => '保存草稿失败',
        self::MATERIAL_TXT_DELELT_DRAFT_FAIL => '删除草稿失败',
        self::MATERIAL_TXT_SET_ARTICLE_FAIL => '修改图文失败',
        self::MATERIAL_TXT_GET_ARTICLE_FAIL => '获取图文消息失败',
        self::MP_GET_IMGTXT_TRACE_FAIL => '获取图文轨迹失败',
   	);

    public static function getErrorMessage($errorCode) {
        if(isset(self::$errorMessages[$errorCode])){
            return self::$errorMessages[$errorCode];
        }
        else{
            return parent::getErrorMessage($errorCode);
        }
    }
}
