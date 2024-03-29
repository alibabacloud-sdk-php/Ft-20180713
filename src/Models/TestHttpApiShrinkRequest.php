<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class TestHttpApiShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $booleanParam;

    /**
     * @var string
     */
    public $defaultValueShrink;

    /**
     * @var string
     */
    public $otherParamShrink;

    /**
     * @var string
     */
    public $stringValueShrink;
    protected $_name = [
        'booleanParam'       => 'BooleanParam',
        'defaultValueShrink' => 'DefaultValue',
        'otherParamShrink'   => 'OtherParam',
        'stringValueShrink'  => 'StringValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->booleanParam) {
            $res['BooleanParam'] = $this->booleanParam;
        }
        if (null !== $this->defaultValueShrink) {
            $res['DefaultValue'] = $this->defaultValueShrink;
        }
        if (null !== $this->otherParamShrink) {
            $res['OtherParam'] = $this->otherParamShrink;
        }
        if (null !== $this->stringValueShrink) {
            $res['StringValue'] = $this->stringValueShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestHttpApiShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BooleanParam'])) {
            $model->booleanParam = $map['BooleanParam'];
        }
        if (isset($map['DefaultValue'])) {
            $model->defaultValueShrink = $map['DefaultValue'];
        }
        if (isset($map['OtherParam'])) {
            $model->otherParamShrink = $map['OtherParam'];
        }
        if (isset($map['StringValue'])) {
            $model->stringValueShrink = $map['StringValue'];
        }

        return $model;
    }
}
