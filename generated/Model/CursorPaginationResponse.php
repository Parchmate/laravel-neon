<?php

namespace Vendor\Library\Generated\Model;

class CursorPaginationResponse extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * To paginate the response, issue an initial request with `limit` value. Then, add the value returned in the response `.pagination.next` attribute into the request under the `cursor` query parameter to the subsequent request to retrieve next page in pagination. The contents on cursor `next` are opaque, clients are not expected to make any assumptions on the format of the data inside the cursor.
     *
     * @var CursorPagination
     */
    protected $pagination;
    /**
     * To paginate the response, issue an initial request with `limit` value. Then, add the value returned in the response `.pagination.next` attribute into the request under the `cursor` query parameter to the subsequent request to retrieve next page in pagination. The contents on cursor `next` are opaque, clients are not expected to make any assumptions on the format of the data inside the cursor.
     *
     * @return CursorPagination
     */
    public function getPagination(): CursorPagination
    {
        return $this->pagination;
    }
    /**
     * To paginate the response, issue an initial request with `limit` value. Then, add the value returned in the response `.pagination.next` attribute into the request under the `cursor` query parameter to the subsequent request to retrieve next page in pagination. The contents on cursor `next` are opaque, clients are not expected to make any assumptions on the format of the data inside the cursor.
     *
     * @param CursorPagination $pagination
     *
     * @return self
     */
    public function setPagination(CursorPagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
}