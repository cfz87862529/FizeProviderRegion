<?php

namespace fize\provider\region;

/**
 * 省市区
 */
class Region
{

    /**
     * @var RegionHandler 接口处理器
     */
    protected static $handler;

    /**
     * 取得单例
     * @param string $handler 使用的实际接口名称
     * @param array $config 配置项
     * @return RegionHandler
     */
    public static function getInstance($handler, array $config = [])
    {
        if (empty(self::$handler)) {
            $class = '\\' . __NAMESPACE__ . '\\handler\\' . $handler;
            self::$handler = new $class($config);
        }
        return self::$handler;
    }
}
