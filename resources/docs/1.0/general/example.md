# Example

This is an example group

---

- [Example](#example)



<a name="example"></a>
## Example

This is an example endpoint.
### Endpoint
|Method|URI|Authentication|
|:-|:-|:-|
|`GET`|`/api/foo`|`false`|

### Query Params
|Name|Type|Status|Description|
|:-|:-|:-|:-|
|`limit`|`numeric`|`optional`|`The limit`|


### Body Params
|Name|Type|Status|Description|
|:-|:-|:-|:-|
|`username`|`string`|`required`|`The username or email of the user`|



> {success} Example Success Response
Code `200`

Content

```json
{
    "Foo": "Bar"
}

```

> {danger} Example Error Response

Code `400`

Content

```json
{
    "error": true
}

```


