<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线缓存是否开启
 *
 * @method string getSwitch() 获取on | off, 离线缓存是否开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置on | off, 离线缓存是否开启
注意：此字段可能返回 null，表示取不到有效值。
 */
class OfflineCache extends AbstractModel
{
    /**
     * @var string on | off, 离线缓存是否开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @param string $Switch on | off, 离线缓存是否开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
