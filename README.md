# hp
 A PHP framework for web artisans

这是一个用于个人学习的MVC框架，了解 MVC 的开发模式和运行流程。

# 目录介绍

<img src="https://ws4.sinaimg.cn/large/006tNc79gy1fvq9f736s4j30cs0fuwf6.jpg" height="250px" width="200px" >

```
.
├── README.md
├── app：应用程序目录。用户在其中进行功能开发
│   └── home：模块目录。一般分为前台（home）和后台模块（admin），这里只建立的前台模块
│       ├── controller：前台控制器目录，存放控制器文件。主要处理前台模块的操作
│       ├── model：前台模型目录，存放模型文件。处理前台模型的相关操作
│       └── view：前台视图目录，存放视图文件。前台展示的模板文件。
├── config：配置文件目录 
│   └── config.php：框架的配置文件
├── index.php：框架入口文件。所有请求都经过此文件处理
├── runtime：运行时目录，保存框架运行时产生的数据。
│   ├── cache :缓存目录。用于存放缓存的模板文件
│   ├── compile :编译目录。用于存放经过编译的模板文件
│   └── log :日志文件。用于记录框架运行期间的行为
└── sys：框架目录。用于存放框架文件
    ├── core：框架核心目录。存放框架运行所需的核心文件
    │   ├── App.php：框架启动类
    │   ├── Config.php：框架配置类
    │   ├── Loader.php：框架自动加载类
    │   └── Router.php：框架路由类
    └── start.php框架入口文件。所有请求都经过此文件处理
```
