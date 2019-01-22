# 線上訂購飲料系統

<p align="center"><img src="https://i.imgur.com/5jHtEIz.jpg"></p>

協助使用者進行飲料訂購的網站

## 網站功能

- 顯示產品資訊
- 後台飲料資訊 顯示、新增、刪除

## 網站安裝

1. git clone https://github.com/WISD-2018/final01.git
2. composer install
3. copy .env.example .env (For windows) .env.example .env(For Unix)
4. modify .env (not need to input email field)
5. php artisan migrate
6. 將clone之專案資料夾內的final01.sql檔案，匯入進資料庫中
<p align="center"><img src="https://i.imgur.com/zSHk9lV.png"></p>

## 使用者資料

Default user
- ID:user@user.com Password:imuser

Admin
- ID:ccc@ccc.com Password:cccccc

#### 設計者
- [國立勤益科大 資訊管理系三乙 3A532066 劉彩羽](https://github.com/3A532066)
- [國立勤益科大 資訊管理系三乙 3A532072 陳泓霖](https://github.com/3A532072)