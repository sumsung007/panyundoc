# 盘云文档管理系统-个人版

盘云文档管理系统是在owncloud的基础上优化修改而来，完全开源免费（解压free_pineconecloud.tar.gz）即得完整代码。

更多内容见[官网](http://www.panyun.io/)

## 相比原版owncloud的优势

* 经过各种中文环境测试
* 中文文档（目前还在进一步完善中）
* Bug修正更及时
* 部署超级简单

## 功能列表

1. 文档上传、下载
1. 多平台同步
1. 文档共享
1. 共享外链
1. 二维码扫描下载
1. 文件多版本管理
1. 用户管理
1. 文件、文件夹权限管理（读、写、下载、共享、空间容量限制）
1. 文件锁定、解锁
1. LDAP
1. 文件动态一览
1. 视频播放
1. pdf在线查看、图片在线查看、文本文件在线查看
1. Office文件在线查看--自动转为PDF文件
1. 文件收藏
1. 文件标签
1. 文件评论
1. 第三方应用支持
1. 丰富的日志
1. 一键部署
1. 本地Office编辑/查看在线文件
1. 简易搜索/全文搜索

## 高级版本提供以下模块

1. 外部存储挂接(Aliyun OSS、AmazonS3、FTP、SFTP、本地磁盘、Openstack对象存储、SMB、Webdav …… )
1. 服务端软件零费用的在线编辑 --- 基于开源软件Libreoffice
1. 基于微软提供的服务端的在线编辑---（需单独采购微软oos，需要域控）
1. 服务器集群
1. 7*24服务支持

## 一键安装

1. [安装Docker](https://segmentfault.com/a/1190000002485231)
2. 使用网易提供的[Docker镜像](https://c.163.com/wiki/index.php?title=DockerHub%E9%95%9C%E5%83%8F%E5%8A%A0%E9%80%9F)或者阿里云提供的[Docker镜像](https://yq.aliyun.com/articles/29941)
3. 执行以下命令:
 	docker pull xapanyun/panyundoc  
	docker run -d -P xapanyun/panyundoc

4. 查看当前发布出去的端口
	docker ps

5. 现在可以根据查看到的端口通过浏览器访问了
