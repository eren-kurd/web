var obj = JSON.parse($response.body);

obj= {

  "messages": [
    ""
  ],
  "data": {
    "account_no": "Hahaha",
    "mobile_no": "+9649900000000",
    "name": "Snap:mr.hamalove",
    "date_of_birth": "2001-04-26",
    "balance": "30990999994.00",
    "photo": "https://raw.githubusercontent.com/ferkaribokurd/fastpayfake/main/IMG_20210421_013212.jpg",
    "email_verified": 1,
    "type": "Personal",
    "status": 1,
    "verification_info": {
      "verification_doc_id": "",
      "verification_doc_file": "",
      "status": 3,
      "icon": "https://cdn.fast-pay.cash/icons/verifications/img_3.png",
      "texts": {
        "en": "Upload your ID to get verified",
        "ar": "ارفع بطاقتك الشخصية للتوثيق",
        "ku": "ناسنامەکەت داخڵ بکە، بۆ پەسند کردنی ھەژمارەکەت "
      },
      "redirect_url": "com.fastpaywalletngc://idupdate"
    },
    "permissions": {
      "mobileRecharge": false,
      "onlineCard": false,
      "internetPlan": false
    },
    "referral_code": "kkkkkk",
    "referral_description": "هاوڕێیەک بانگهێشت بکە بۆ فاستپەی، بۆ ئەوی 500 دیناری  عێراقی وەربگری دوای بانگهێشتکردنی هاوڕێیەکەت لەگەڵمان."
  },
  "code": 200
};

$done({body: JSON.stringify(obj)});