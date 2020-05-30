<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Solomon04\Documentation\Annotation\BodyParam;
use Solomon04\Documentation\Annotation\Group;
use Solomon04\Documentation\Annotation\Meta;
use Solomon04\Documentation\Annotation\QueryParam;
use Solomon04\Documentation\Annotation\ResponseExample;

/**
 * @Group(name="Example", description="This is an example group")
 */
class ApiController extends Controller
{
    /**
     * @Meta(name="Example", description="This is an example endpoint.", href="example")
     * @BodyParam(name="username", type="string", status="required", description="The username or email of the user", example="business_admin")
     * @QueryParam(name="limit", type="numeric", status="optional", description="The limit", example="1")
     * @ResponseExample(status=200, example="responses/good.json")
     * @ResponseExample(status=400, example="responses/bad.json")
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function foo(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'string'],
            'limit' => ['numeric']
        ]);
        return response()->json(['foo' => 'bar']);
    }
}
