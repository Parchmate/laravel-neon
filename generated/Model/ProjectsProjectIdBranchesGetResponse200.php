<?php

namespace Vendor\Library\Generated\Model;

class ProjectsProjectIdBranchesGetResponse200 extends \ArrayObject
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
     * 
     *
     * @var list<Branch>
     */
    protected $branches;
    /**
     * 
     *
     * @var array<string, AnnotationData>
     */
    protected $annotations;
    /**
     * To paginate the response, issue an initial request with `limit` value. Then, add the value returned in the response `.pagination.next` attribute into the request under the `cursor` query parameter to the subsequent request to retrieve next page in pagination. The contents on cursor `next` are opaque, clients are not expected to make any assumptions on the format of the data inside the cursor.
     *
     * @var CursorPagination
     */
    protected $pagination;
    /**
     * 
     *
     * @return list<Branch>
     */
    public function getBranches(): array
    {
        return $this->branches;
    }
    /**
     * 
     *
     * @param list<Branch> $branches
     *
     * @return self
     */
    public function setBranches(array $branches): self
    {
        $this->initialized['branches'] = true;
        $this->branches = $branches;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, AnnotationData>
     */
    public function getAnnotations(): iterable
    {
        return $this->annotations;
    }
    /**
     * 
     *
     * @param array<string, AnnotationData> $annotations
     *
     * @return self
     */
    public function setAnnotations(iterable $annotations): self
    {
        $this->initialized['annotations'] = true;
        $this->annotations = $annotations;
        return $this;
    }
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