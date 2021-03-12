<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01Request;
use AlibabaCloud\SDK\Ft\V20180713\Models\BatchAuditTest01Response;
use AlibabaCloud\SDK\Ft\V20180713\Models\FTApiAliasApiRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FTApiAliasApiResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressDubboRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressDubboResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressHsfResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressHttpVpcRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressHttpVpcResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtDynamicAddressHttpVpcShrinkRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtEagleEyeRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtEagleEyeResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtFlowSpecialRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtFlowSpecialResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtGatedLaunchPolicy4Request;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtGatedLaunchPolicy4Response;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtIpFlowControlRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtIpFlowControlResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtParamListRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\FtParamListResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestFlowStrategy01Request;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestFlowStrategy01Response;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestFlowStrategy01ShrinkRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestHttpApiRequest;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestHttpApiResponse;
use AlibabaCloud\SDK\Ft\V20180713\Models\TestHttpApiShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\OpenApiClient;

class Ft extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->_endpointMap  = [
            'ap-northeast-2-pop'          => 'ft.aliyuncs.com',
            'ap-south-1'                  => 'ft.aliyuncs.com',
            'ap-southeast-1'              => 'ft.aliyuncs.com',
            'ap-southeast-2'              => 'ft.aliyuncs.com',
            'ap-southeast-3'              => 'ft.aliyuncs.com',
            'ap-southeast-5'              => 'ft.aliyuncs.com',
            'cn-beijing'                  => 'ft.aliyuncs.com',
            'cn-beijing-finance-1'        => 'ft.aliyuncs.com',
            'cn-beijing-finance-pop'      => 'ft.aliyuncs.com',
            'cn-beijing-gov-1'            => 'ft.aliyuncs.com',
            'cn-beijing-nu16-b01'         => 'ft.aliyuncs.com',
            'cn-chengdu'                  => 'ft.aliyuncs.com',
            'cn-edge-1'                   => 'ft.aliyuncs.com',
            'cn-fujian'                   => 'ft.aliyuncs.com',
            'cn-haidian-cm12-c01'         => 'ft.aliyuncs.com',
            'cn-hangzhou-bj-b01'          => 'ft.aliyuncs.com',
            'cn-hangzhou-finance'         => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-prod-1' => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-test-1' => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-test-2' => 'ft.aliyuncs.com',
            'cn-hangzhou-internal-test-3' => 'ft.aliyuncs.com',
            'cn-hangzhou-test-306'        => 'ft.aliyuncs.com',
            'cn-hongkong-finance-pop'     => 'ft.aliyuncs.com',
            'cn-huhehaote'                => 'ft.aliyuncs.com',
            'cn-huhehaote-nebula-1'       => 'ft.aliyuncs.com',
            'cn-qingdao'                  => 'ft.aliyuncs.com',
            'cn-qingdao-nebula'           => 'ft.aliyuncs.com',
            'cn-shanghai-et15-b01'        => 'ft.aliyuncs.com',
            'cn-shanghai-et2-b01'         => 'ft.aliyuncs.com',
            'cn-shanghai-finance-1'       => 'ft.aliyuncs.com',
            'cn-shanghai-inner'           => 'ft.aliyuncs.com',
            'cn-shanghai-internal-test-1' => 'ft.aliyuncs.com',
            'cn-shenzhen-finance-1'       => 'ft.aliyuncs.com',
            'cn-shenzhen-inner'           => 'ft.aliyuncs.com',
            'cn-shenzhen-st4-d01'         => 'ft.aliyuncs.com',
            'cn-shenzhen-su18-b01'        => 'ft.aliyuncs.com',
            'cn-wuhan'                    => 'ft.aliyuncs.com',
            'cn-wulanchabu'               => 'ft.aliyuncs.com',
            'cn-yushanfang'               => 'ft.aliyuncs.com',
            'cn-zhangbei'                 => 'ft.aliyuncs.com',
            'cn-zhangbei-na61-b01'        => 'ft.aliyuncs.com',
            'cn-zhangjiakou-na62-a01'     => 'ft.aliyuncs.com',
            'cn-zhengzhou-nebula-1'       => 'ft.aliyuncs.com',
            'eu-central-1'                => 'ft.aliyuncs.com',
            'eu-west-1'                   => 'ft.aliyuncs.com',
            'eu-west-1-oxs'               => 'ft.aliyuncs.com',
            'me-east-1'                   => 'ft.aliyuncs.com',
            'rus-west-1-pop'              => 'ft.aliyuncs.com',
            'us-west-1'                   => 'ft.aliyuncs.com',
        ];
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('ft', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param BatchAuditTest01Request $request
     * @param RuntimeOptions          $runtime
     *
     * @return BatchAuditTest01Response
     */
    public function batchAuditTest01WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return BatchAuditTest01Response::fromMap($this->doRPCRequest('BatchAuditTest01', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param BatchAuditTest01Request $request
     *
     * @return BatchAuditTest01Response
     */
    public function batchAuditTest01($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->batchAuditTest01WithOptions($request, $runtime);
    }

    /**
     * @param FTApiAliasApiRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FTApiAliasApiResponse
     */
    public function fTApiAliasApiWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FTApiAliasApiResponse::fromMap($this->doRPCRequest('FTApiAliasApi', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FTApiAliasApiRequest $request
     *
     * @return FTApiAliasApiResponse
     */
    public function fTApiAliasApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->fTApiAliasApiWithOptions($request, $runtime);
    }

    /**
     * @param FtDynamicAddressDubboRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return FtDynamicAddressDubboResponse
     */
    public function ftDynamicAddressDubboWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FtDynamicAddressDubboResponse::fromMap($this->doRPCRequest('FtDynamicAddressDubbo', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FtDynamicAddressDubboRequest $request
     *
     * @return FtDynamicAddressDubboResponse
     */
    public function ftDynamicAddressDubbo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftDynamicAddressDubboWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return FtDynamicAddressHsfResponse
     */
    public function ftDynamicAddressHsfWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);

        return FtDynamicAddressHsfResponse::fromMap($this->doRPCRequest('FtDynamicAddressHsf', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @return FtDynamicAddressHsfResponse
     */
    public function ftDynamicAddressHsf()
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftDynamicAddressHsfWithOptions($runtime);
    }

    /**
     * @param FtDynamicAddressHttpVpcRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return FtDynamicAddressHttpVpcResponse
     */
    public function ftDynamicAddressHttpVpcWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new FtDynamicAddressHttpVpcShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->stringValue)) {
            $request->stringValueShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->stringValue, 'StringValue', 'json');
        }
        if (!Utils::isUnset($tmpReq->defaultValue)) {
            $request->defaultValueShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->defaultValue, 'DefaultValue', 'json');
        }
        if (!Utils::isUnset($tmpReq->otherParam)) {
            $request->otherParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->otherParam, 'OtherParam', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FtDynamicAddressHttpVpcResponse::fromMap($this->doRPCRequest('FtDynamicAddressHttpVpc', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FtDynamicAddressHttpVpcRequest $request
     *
     * @return FtDynamicAddressHttpVpcResponse
     */
    public function ftDynamicAddressHttpVpc($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftDynamicAddressHttpVpcWithOptions($request, $runtime);
    }

    /**
     * @param FtEagleEyeRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return FtEagleEyeResponse
     */
    public function ftEagleEyeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FtEagleEyeResponse::fromMap($this->doRPCRequest('FtEagleEye', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FtEagleEyeRequest $request
     *
     * @return FtEagleEyeResponse
     */
    public function ftEagleEye($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftEagleEyeWithOptions($request, $runtime);
    }

    /**
     * @param FtFlowSpecialRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return FtFlowSpecialResponse
     */
    public function ftFlowSpecialWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FtFlowSpecialResponse::fromMap($this->doRPCRequest('FtFlowSpecial', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FtFlowSpecialRequest $request
     *
     * @return FtFlowSpecialResponse
     */
    public function ftFlowSpecial($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftFlowSpecialWithOptions($request, $runtime);
    }

    /**
     * @param FtGatedLaunchPolicy4Request $request
     * @param RuntimeOptions              $runtime
     *
     * @return FtGatedLaunchPolicy4Response
     */
    public function ftGatedLaunchPolicy4WithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FtGatedLaunchPolicy4Response::fromMap($this->doRPCRequest('FtGatedLaunchPolicy4', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FtGatedLaunchPolicy4Request $request
     *
     * @return FtGatedLaunchPolicy4Response
     */
    public function ftGatedLaunchPolicy4($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftGatedLaunchPolicy4WithOptions($request, $runtime);
    }

    /**
     * @param FtIpFlowControlRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return FtIpFlowControlResponse
     */
    public function ftIpFlowControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FtIpFlowControlResponse::fromMap($this->doRPCRequest('FtIpFlowControl', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FtIpFlowControlRequest $request
     *
     * @return FtIpFlowControlResponse
     */
    public function ftIpFlowControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftIpFlowControlWithOptions($request, $runtime);
    }

    /**
     * @param FtParamListRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return FtParamListResponse
     */
    public function ftParamListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return FtParamListResponse::fromMap($this->doRPCRequest('FtParamList', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param FtParamListRequest $request
     *
     * @return FtParamListResponse
     */
    public function ftParamList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->ftParamListWithOptions($request, $runtime);
    }

    /**
     * @param TestFlowStrategy01Request $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return TestFlowStrategy01Response
     */
    public function testFlowStrategy01WithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TestFlowStrategy01ShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->names)) {
            $request->namesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->names, 'Names', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TestFlowStrategy01Response::fromMap($this->doRPCRequest('TestFlowStrategy01', '2018-07-13', 'HTTPS', 'PUT', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TestFlowStrategy01Request $request
     *
     * @return TestFlowStrategy01Response
     */
    public function testFlowStrategy01($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testFlowStrategy01WithOptions($request, $runtime);
    }

    /**
     * @param TestHttpApiRequest $tmpReq
     * @param RuntimeOptions     $runtime
     *
     * @return TestHttpApiResponse
     */
    public function testHttpApiWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new TestHttpApiShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->stringValue)) {
            $request->stringValueShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->stringValue, 'StringValue', 'json');
        }
        if (!Utils::isUnset($tmpReq->defaultValue)) {
            $request->defaultValueShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->defaultValue, 'DefaultValue', 'json');
        }
        if (!Utils::isUnset($tmpReq->otherParam)) {
            $request->otherParamShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->otherParam, 'OtherParam', 'json');
        }
        $req = new OpenApiRequest([
            'body' => Utils::toMap($request),
        ]);

        return TestHttpApiResponse::fromMap($this->doRPCRequest('TestHttpApi', '2018-07-13', 'HTTPS', 'POST', 'AK', 'json', $req, $runtime));
    }

    /**
     * @param TestHttpApiRequest $request
     *
     * @return TestHttpApiResponse
     */
    public function testHttpApi($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->testHttpApiWithOptions($request, $runtime);
    }
}
