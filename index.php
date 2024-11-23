<?php // @codingStandardsIgnoreFile
/**
 * 此文件是 Pico 的一部分，其版权归文件版本控制历史中记录的贡献者所有，
 * 可以从以下原始位置查看文件历史：
 *
 * <https://github.com/picocms/Pico/blob/master/index.php>
 *
 * SPDX-License-Identifier: MIT
 * 许可证文件名: LICENSE
 */

// 加载依赖
if (is_file(__DIR__ . '/vendor/autoload.php')) {
    // composer 根包
    require_once(__DIR__ . '/vendor/autoload.php');
} elseif (is_file(__DIR__ . '/../../../vendor/autoload.php')) {
    // composer 依赖包
    require_once(__DIR__ . '/../../../vendor/autoload.php');
} else {
    die(
        "无法找到 'vendor/autoload.php' 文件。如果您使用的是基于 Composer 的 Pico 安装，请运行 `composer install`。"
        . "如果您尝试使用 Pico 的预构建发布包，请确保下载最新的以 'pico-release-v*.tar.gz' 命名的发布包（不要下载源码包）。"
    );
}

// 实例化 Pico
$pico = new Pico(
    __DIR__,    // 根目录
    'config/',  // 配置目录
    'plugins/', // 插件目录
    'themes/'   // 主题目录
);

// 是否覆盖配置？
//$pico->setConfig(array());

// 运行应用程序
echo $pico->run();
