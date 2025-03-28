<?php

namespace Vendor\Library\Generated\Normalizer;

use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Vendor\Library\Generated\Model\PaginationResponse::class => \Vendor\Library\Generated\Normalizer\PaginationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\Pagination::class => \Vendor\Library\Generated\Normalizer\PaginationNormalizer::class,
            
            \Vendor\Library\Generated\Model\EmptyResponse::class => \Vendor\Library\Generated\Normalizer\EmptyResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\AddProjectJWKSRequest::class => \Vendor\Library\Generated\Normalizer\AddProjectJWKSRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\JWKS::class => \Vendor\Library\Generated\Normalizer\JWKSNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectJWKSResponse::class => \Vendor\Library\Generated\Normalizer\ProjectJWKSResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeyCreateRequest::class => \Vendor\Library\Generated\Normalizer\ApiKeyCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrgApiKeyCreateRequest::class => \Vendor\Library\Generated\Normalizer\OrgApiKeyCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeyCreateResponse::class => \Vendor\Library\Generated\Normalizer\ApiKeyCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrgApiKeyCreateResponse::class => \Vendor\Library\Generated\Normalizer\OrgApiKeyCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeyRevokeResponse::class => \Vendor\Library\Generated\Normalizer\ApiKeyRevokeResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrgApiKeyRevokeResponse::class => \Vendor\Library\Generated\Normalizer\OrgApiKeyRevokeResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeysListResponseItem::class => \Vendor\Library\Generated\Normalizer\ApiKeysListResponseItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class => \Vendor\Library\Generated\Normalizer\OrgApiKeysListResponseItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeyCreatorData::class => \Vendor\Library\Generated\Normalizer\ApiKeyCreatorDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\Operation::class => \Vendor\Library\Generated\Normalizer\OperationNormalizer::class,
            
            \Vendor\Library\Generated\Model\OperationResponse::class => \Vendor\Library\Generated\Normalizer\OperationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OperationsResponse::class => \Vendor\Library\Generated\Normalizer\OperationsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectListItem::class => \Vendor\Library\Generated\Normalizer\ProjectListItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\Project::class => \Vendor\Library\Generated\Normalizer\ProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectCreateRequest::class => \Vendor\Library\Generated\Normalizer\ProjectCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectCreateRequestProject::class => \Vendor\Library\Generated\Normalizer\ProjectCreateRequestProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectCreateRequestProjectBranch::class => \Vendor\Library\Generated\Normalizer\ProjectCreateRequestProjectBranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectUpdateRequest::class => \Vendor\Library\Generated\Normalizer\ProjectUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class => \Vendor\Library\Generated\Normalizer\ProjectUpdateRequestProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectSettingsData::class => \Vendor\Library\Generated\Normalizer\ProjectSettingsDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectResponse::class => \Vendor\Library\Generated\Normalizer\ProjectResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsResponse::class => \Vendor\Library\Generated\Normalizer\ProjectsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectPermission::class => \Vendor\Library\Generated\Normalizer\ProjectPermissionNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectPermissions::class => \Vendor\Library\Generated\Normalizer\ProjectPermissionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\GrantPermissionToProjectRequest::class => \Vendor\Library\Generated\Normalizer\GrantPermissionToProjectRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerAccountResponse::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerAccountResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerProjectResponse::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerProjectResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerProject::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerPeriod::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerPeriodNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerTimeframe::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerTimeframeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectLimits::class => \Vendor\Library\Generated\Normalizer\ProjectLimitsNormalizer::class,
            
            \Vendor\Library\Generated\Model\Limits::class => \Vendor\Library\Generated\Normalizer\LimitsNormalizer::class,
            
            \Vendor\Library\Generated\Model\LimitsPerProject::class => \Vendor\Library\Generated\Normalizer\LimitsPerProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\AvailablePreloadLibrary::class => \Vendor\Library\Generated\Normalizer\AvailablePreloadLibraryNormalizer::class,
            
            \Vendor\Library\Generated\Model\AvailablePreloadLibraries::class => \Vendor\Library\Generated\Normalizer\AvailablePreloadLibrariesNormalizer::class,
            
            \Vendor\Library\Generated\Model\Branch::class => \Vendor\Library\Generated\Normalizer\BranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchCreatedBy::class => \Vendor\Library\Generated\Normalizer\BranchCreatedByNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchCreateRequestEndpointOptions::class => \Vendor\Library\Generated\Normalizer\BranchCreateRequestEndpointOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchCreateRequest::class => \Vendor\Library\Generated\Normalizer\BranchCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class => \Vendor\Library\Generated\Normalizer\BranchCreateRequestBranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchUpdateRequest::class => \Vendor\Library\Generated\Normalizer\BranchUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchUpdateRequestBranch::class => \Vendor\Library\Generated\Normalizer\BranchUpdateRequestBranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchRestoreRequest::class => \Vendor\Library\Generated\Normalizer\BranchRestoreRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchResponse::class => \Vendor\Library\Generated\Normalizer\BranchResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchSchemaResponse::class => \Vendor\Library\Generated\Normalizer\BranchSchemaResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchSchemaCompareResponse::class => \Vendor\Library\Generated\Normalizer\BranchSchemaCompareResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchesResponse::class => \Vendor\Library\Generated\Normalizer\BranchesResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchesCountResponse::class => \Vendor\Library\Generated\Normalizer\BranchesCountResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionParameters::class => \Vendor\Library\Generated\Normalizer\ConnectionParametersNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionDetails::class => \Vendor\Library\Generated\Normalizer\ConnectionDetailsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionURIResponse::class => \Vendor\Library\Generated\Normalizer\ConnectionURIResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\Endpoint::class => \Vendor\Library\Generated\Normalizer\EndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\AllowedIps::class => \Vendor\Library\Generated\Normalizer\AllowedIpsNormalizer::class,
            
            \Vendor\Library\Generated\Model\MaintenanceWindow::class => \Vendor\Library\Generated\Normalizer\MaintenanceWindowNormalizer::class,
            
            \Vendor\Library\Generated\Model\PreloadLibraries::class => \Vendor\Library\Generated\Normalizer\PreloadLibrariesNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointCreateRequest::class => \Vendor\Library\Generated\Normalizer\EndpointCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class => \Vendor\Library\Generated\Normalizer\EndpointCreateRequestEndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointUpdateRequest::class => \Vendor\Library\Generated\Normalizer\EndpointUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointUpdateRequestEndpoint::class => \Vendor\Library\Generated\Normalizer\EndpointUpdateRequestEndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointResponse::class => \Vendor\Library\Generated\Normalizer\EndpointResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionURIsResponse::class => \Vendor\Library\Generated\Normalizer\ConnectionURIsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionURIsOptionalResponse::class => \Vendor\Library\Generated\Normalizer\ConnectionURIsOptionalResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\VPCEndpointsResponse::class => \Vendor\Library\Generated\Normalizer\VPCEndpointsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\VPCEndpoint::class => \Vendor\Library\Generated\Normalizer\VPCEndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\VPCEndpointDetails::class => \Vendor\Library\Generated\Normalizer\VPCEndpointDetailsNormalizer::class,
            
            \Vendor\Library\Generated\Model\VPCEndpointAssignment::class => \Vendor\Library\Generated\Normalizer\VPCEndpointAssignmentNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointsResponse::class => \Vendor\Library\Generated\Normalizer\EndpointsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointPasswordlessSessionAuthRequest::class => \Vendor\Library\Generated\Normalizer\EndpointPasswordlessSessionAuthRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\StatementResult::class => \Vendor\Library\Generated\Normalizer\StatementResultNormalizer::class,
            
            \Vendor\Library\Generated\Model\StatementData::class => \Vendor\Library\Generated\Normalizer\StatementDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ExplainData::class => \Vendor\Library\Generated\Normalizer\ExplainDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\Role::class => \Vendor\Library\Generated\Normalizer\RoleNormalizer::class,
            
            \Vendor\Library\Generated\Model\RoleCreateRequest::class => \Vendor\Library\Generated\Normalizer\RoleCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\RoleCreateRequestRole::class => \Vendor\Library\Generated\Normalizer\RoleCreateRequestRoleNormalizer::class,
            
            \Vendor\Library\Generated\Model\RoleResponse::class => \Vendor\Library\Generated\Normalizer\RoleResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\JWKSResponse::class => \Vendor\Library\Generated\Normalizer\JWKSResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\RolesResponse::class => \Vendor\Library\Generated\Normalizer\RolesResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\RolePasswordResponse::class => \Vendor\Library\Generated\Normalizer\RolePasswordResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\PaymentSourceBankCard::class => \Vendor\Library\Generated\Normalizer\PaymentSourceBankCardNormalizer::class,
            
            \Vendor\Library\Generated\Model\PaymentSource::class => \Vendor\Library\Generated\Normalizer\PaymentSourceNormalizer::class,
            
            \Vendor\Library\Generated\Model\BillingAccount::class => \Vendor\Library\Generated\Normalizer\BillingAccountNormalizer::class,
            
            \Vendor\Library\Generated\Model\Database::class => \Vendor\Library\Generated\Normalizer\DatabaseNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseCreateRequest::class => \Vendor\Library\Generated\Normalizer\DatabaseCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseCreateRequestDatabase::class => \Vendor\Library\Generated\Normalizer\DatabaseCreateRequestDatabaseNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseUpdateRequest::class => \Vendor\Library\Generated\Normalizer\DatabaseUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseUpdateRequestDatabase::class => \Vendor\Library\Generated\Normalizer\DatabaseUpdateRequestDatabaseNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseResponse::class => \Vendor\Library\Generated\Normalizer\DatabaseResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabasesResponse::class => \Vendor\Library\Generated\Normalizer\DatabasesResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\Invitation::class => \Vendor\Library\Generated\Normalizer\InvitationNormalizer::class,
            
            \Vendor\Library\Generated\Model\Member::class => \Vendor\Library\Generated\Normalizer\MemberNormalizer::class,
            
            \Vendor\Library\Generated\Model\MemberUserInfo::class => \Vendor\Library\Generated\Normalizer\MemberUserInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\MemberWithUser::class => \Vendor\Library\Generated\Normalizer\MemberWithUserNormalizer::class,
            
            \Vendor\Library\Generated\Model\Organization::class => \Vendor\Library\Generated\Normalizer\OrganizationNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationsResponse::class => \Vendor\Library\Generated\Normalizer\OrganizationsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationsUpdateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationsUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationInvitationsResponse::class => \Vendor\Library\Generated\Normalizer\OrganizationInvitationsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationInviteCreateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationInviteCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationInvitesCreateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationInvitesCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationInviteUpdateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationInviteUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationGuest::class => \Vendor\Library\Generated\Normalizer\OrganizationGuestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationMemberUpdateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationMemberUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationMembersResponse::class => \Vendor\Library\Generated\Normalizer\OrganizationMembersResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\InvitationCreateRequest::class => \Vendor\Library\Generated\Normalizer\InvitationCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationCreateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationCreateRequestOrganization::class => \Vendor\Library\Generated\Normalizer\OrganizationCreateRequestOrganizationNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationLimits::class => \Vendor\Library\Generated\Normalizer\OrganizationLimitsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ActiveRegionsResponse::class => \Vendor\Library\Generated\Normalizer\ActiveRegionsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\RegionResponse::class => \Vendor\Library\Generated\Normalizer\RegionResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\CurrentUserAuthAccount::class => \Vendor\Library\Generated\Normalizer\CurrentUserAuthAccountNormalizer::class,
            
            \Vendor\Library\Generated\Model\LinkedAuthAccount::class => \Vendor\Library\Generated\Normalizer\LinkedAuthAccountNormalizer::class,
            
            \Vendor\Library\Generated\Model\UpdateUserInfoRequest::class => \Vendor\Library\Generated\Normalizer\UpdateUserInfoRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\CurrentUserInfoResponse::class => \Vendor\Library\Generated\Normalizer\CurrentUserInfoResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConvertUserToOrgRequest::class => \Vendor\Library\Generated\Normalizer\ConvertUserToOrgRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\CurrentUserInfoAuthResponse::class => \Vendor\Library\Generated\Normalizer\CurrentUserInfoAuthResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\AuthDetailsResponse::class => \Vendor\Library\Generated\Normalizer\AuthDetailsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest::class => \Vendor\Library\Generated\Normalizer\TransferProjectsToOrganizationRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\VerifyUserPasswordRequest::class => \Vendor\Library\Generated\Normalizer\VerifyUserPasswordRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointSettingsData::class => \Vendor\Library\Generated\Normalizer\EndpointSettingsDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectQuota::class => \Vendor\Library\Generated\Normalizer\ProjectQuotaNormalizer::class,
            
            \Vendor\Library\Generated\Model\DefaultEndpointSettings::class => \Vendor\Library\Generated\Normalizer\DefaultEndpointSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\HealthCheck::class => \Vendor\Library\Generated\Normalizer\HealthCheckNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectOwnerData::class => \Vendor\Library\Generated\Normalizer\ProjectOwnerDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponse::class => \Vendor\Library\Generated\Normalizer\LimitsUnsatisfiedResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponseLimitsItem::class => \Vendor\Library\Generated\Normalizer\LimitsUnsatisfiedResponseLimitsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponse::class => \Vendor\Library\Generated\Normalizer\ProjectsWithIntegrationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponseProjectsItem::class => \Vendor\Library\Generated\Normalizer\ProjectsWithIntegrationResponseProjectsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => \Vendor\Library\Generated\Normalizer\NeonSupernovaCreatePostgRESTRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTResponse::class => \Vendor\Library\Generated\Normalizer\NeonSupernovaCreatePostgRESTResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationRequest::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateIntegrationRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateIntegrationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateAuthProviderSDKKeysRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateNewUserRequest::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateNewUserRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateNewUserResponse::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateNewUserResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectRequest::class => \Vendor\Library\Generated\Normalizer\NeonAuthTransferAuthProviderProjectRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectResponse::class => \Vendor\Library\Generated\Normalizer\NeonAuthTransferAuthProviderProjectResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ListNeonAuthIntegrationsResponse::class => \Vendor\Library\Generated\Normalizer\ListNeonAuthIntegrationsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthIntegration::class => \Vendor\Library\Generated\Normalizer\NeonAuthIntegrationNormalizer::class,
            
            \Vendor\Library\Generated\Model\GeneralError::class => \Vendor\Library\Generated\Normalizer\GeneralErrorNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchOperations::class => \Vendor\Library\Generated\Normalizer\BranchOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointOperations::class => \Vendor\Library\Generated\Normalizer\EndpointOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseOperations::class => \Vendor\Library\Generated\Normalizer\DatabaseOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\RoleOperations::class => \Vendor\Library\Generated\Normalizer\RoleOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\JWKSCreationOperation::class => \Vendor\Library\Generated\Normalizer\JWKSCreationOperationNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationData::class => \Vendor\Library\Generated\Normalizer\AnnotationDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationObjectData::class => \Vendor\Library\Generated\Normalizer\AnnotationObjectDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationCreateValueRequest::class => \Vendor\Library\Generated\Normalizer\AnnotationCreateValueRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationResponse::class => \Vendor\Library\Generated\Normalizer\AnnotationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationsMapResponse::class => \Vendor\Library\Generated\Normalizer\AnnotationsMapResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsApplicationsMapResponse::class => \Vendor\Library\Generated\Normalizer\ProjectsApplicationsMapResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsIntegrationsMapResponse::class => \Vendor\Library\Generated\Normalizer\ProjectsIntegrationsMapResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\CursorPaginationResponse::class => \Vendor\Library\Generated\Normalizer\CursorPaginationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\CursorPagination::class => \Vendor\Library\Generated\Normalizer\CursorPaginationNormalizer::class,
            
            \Vendor\Library\Generated\Model\Snapshot::class => \Vendor\Library\Generated\Normalizer\SnapshotNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResponseListOperations::class => \Vendor\Library\Generated\Normalizer\ResponseListOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResponseCreatedProject::class => \Vendor\Library\Generated\Normalizer\ResponseCreatedProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResponseCreatedBranch::class => \Vendor\Library\Generated\Normalizer\ResponseCreatedBranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsSharedGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdPatchResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdPatchResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdBranchesGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesPostBody::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdBranchesPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesCountGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdBranchesCountGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesBranchIdGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdBranchesBranchIdGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryProjectsGetResponse200::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryProjectsGetResponse200Normalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Vendor\Library\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Vendor\Library\Generated\Model\PaginationResponse::class => false,
                \Vendor\Library\Generated\Model\Pagination::class => false,
                \Vendor\Library\Generated\Model\EmptyResponse::class => false,
                \Vendor\Library\Generated\Model\AddProjectJWKSRequest::class => false,
                \Vendor\Library\Generated\Model\JWKS::class => false,
                \Vendor\Library\Generated\Model\ProjectJWKSResponse::class => false,
                \Vendor\Library\Generated\Model\ApiKeyCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrgApiKeyCreateRequest::class => false,
                \Vendor\Library\Generated\Model\ApiKeyCreateResponse::class => false,
                \Vendor\Library\Generated\Model\OrgApiKeyCreateResponse::class => false,
                \Vendor\Library\Generated\Model\ApiKeyRevokeResponse::class => false,
                \Vendor\Library\Generated\Model\OrgApiKeyRevokeResponse::class => false,
                \Vendor\Library\Generated\Model\ApiKeysListResponseItem::class => false,
                \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class => false,
                \Vendor\Library\Generated\Model\ApiKeyCreatorData::class => false,
                \Vendor\Library\Generated\Model\Operation::class => false,
                \Vendor\Library\Generated\Model\OperationResponse::class => false,
                \Vendor\Library\Generated\Model\OperationsResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectListItem::class => false,
                \Vendor\Library\Generated\Model\Project::class => false,
                \Vendor\Library\Generated\Model\ProjectCreateRequest::class => false,
                \Vendor\Library\Generated\Model\ProjectCreateRequestProject::class => false,
                \Vendor\Library\Generated\Model\ProjectCreateRequestProjectBranch::class => false,
                \Vendor\Library\Generated\Model\ProjectUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class => false,
                \Vendor\Library\Generated\Model\ProjectSettingsData::class => false,
                \Vendor\Library\Generated\Model\ProjectResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectsResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectPermission::class => false,
                \Vendor\Library\Generated\Model\ProjectPermissions::class => false,
                \Vendor\Library\Generated\Model\GrantPermissionToProjectRequest::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerAccountResponse::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerProjectResponse::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerProject::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerPeriod::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerTimeframe::class => false,
                \Vendor\Library\Generated\Model\ProjectLimits::class => false,
                \Vendor\Library\Generated\Model\Limits::class => false,
                \Vendor\Library\Generated\Model\LimitsPerProject::class => false,
                \Vendor\Library\Generated\Model\AvailablePreloadLibrary::class => false,
                \Vendor\Library\Generated\Model\AvailablePreloadLibraries::class => false,
                \Vendor\Library\Generated\Model\Branch::class => false,
                \Vendor\Library\Generated\Model\BranchCreatedBy::class => false,
                \Vendor\Library\Generated\Model\BranchCreateRequestEndpointOptions::class => false,
                \Vendor\Library\Generated\Model\BranchCreateRequest::class => false,
                \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class => false,
                \Vendor\Library\Generated\Model\BranchUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\BranchUpdateRequestBranch::class => false,
                \Vendor\Library\Generated\Model\BranchRestoreRequest::class => false,
                \Vendor\Library\Generated\Model\BranchResponse::class => false,
                \Vendor\Library\Generated\Model\BranchSchemaResponse::class => false,
                \Vendor\Library\Generated\Model\BranchSchemaCompareResponse::class => false,
                \Vendor\Library\Generated\Model\BranchesResponse::class => false,
                \Vendor\Library\Generated\Model\BranchesCountResponse::class => false,
                \Vendor\Library\Generated\Model\ConnectionParameters::class => false,
                \Vendor\Library\Generated\Model\ConnectionDetails::class => false,
                \Vendor\Library\Generated\Model\ConnectionURIResponse::class => false,
                \Vendor\Library\Generated\Model\Endpoint::class => false,
                \Vendor\Library\Generated\Model\AllowedIps::class => false,
                \Vendor\Library\Generated\Model\MaintenanceWindow::class => false,
                \Vendor\Library\Generated\Model\PreloadLibraries::class => false,
                \Vendor\Library\Generated\Model\EndpointCreateRequest::class => false,
                \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class => false,
                \Vendor\Library\Generated\Model\EndpointUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\EndpointUpdateRequestEndpoint::class => false,
                \Vendor\Library\Generated\Model\EndpointResponse::class => false,
                \Vendor\Library\Generated\Model\ConnectionURIsResponse::class => false,
                \Vendor\Library\Generated\Model\ConnectionURIsOptionalResponse::class => false,
                \Vendor\Library\Generated\Model\VPCEndpointsResponse::class => false,
                \Vendor\Library\Generated\Model\VPCEndpoint::class => false,
                \Vendor\Library\Generated\Model\VPCEndpointDetails::class => false,
                \Vendor\Library\Generated\Model\VPCEndpointAssignment::class => false,
                \Vendor\Library\Generated\Model\EndpointsResponse::class => false,
                \Vendor\Library\Generated\Model\EndpointPasswordlessSessionAuthRequest::class => false,
                \Vendor\Library\Generated\Model\StatementResult::class => false,
                \Vendor\Library\Generated\Model\StatementData::class => false,
                \Vendor\Library\Generated\Model\ExplainData::class => false,
                \Vendor\Library\Generated\Model\Role::class => false,
                \Vendor\Library\Generated\Model\RoleCreateRequest::class => false,
                \Vendor\Library\Generated\Model\RoleCreateRequestRole::class => false,
                \Vendor\Library\Generated\Model\RoleResponse::class => false,
                \Vendor\Library\Generated\Model\JWKSResponse::class => false,
                \Vendor\Library\Generated\Model\RolesResponse::class => false,
                \Vendor\Library\Generated\Model\RolePasswordResponse::class => false,
                \Vendor\Library\Generated\Model\PaymentSourceBankCard::class => false,
                \Vendor\Library\Generated\Model\PaymentSource::class => false,
                \Vendor\Library\Generated\Model\BillingAccount::class => false,
                \Vendor\Library\Generated\Model\Database::class => false,
                \Vendor\Library\Generated\Model\DatabaseCreateRequest::class => false,
                \Vendor\Library\Generated\Model\DatabaseCreateRequestDatabase::class => false,
                \Vendor\Library\Generated\Model\DatabaseUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\DatabaseUpdateRequestDatabase::class => false,
                \Vendor\Library\Generated\Model\DatabaseResponse::class => false,
                \Vendor\Library\Generated\Model\DatabasesResponse::class => false,
                \Vendor\Library\Generated\Model\Invitation::class => false,
                \Vendor\Library\Generated\Model\Member::class => false,
                \Vendor\Library\Generated\Model\MemberUserInfo::class => false,
                \Vendor\Library\Generated\Model\MemberWithUser::class => false,
                \Vendor\Library\Generated\Model\Organization::class => false,
                \Vendor\Library\Generated\Model\OrganizationsResponse::class => false,
                \Vendor\Library\Generated\Model\OrganizationsUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationInvitationsResponse::class => false,
                \Vendor\Library\Generated\Model\OrganizationInviteCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationInvitesCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationInviteUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationGuest::class => false,
                \Vendor\Library\Generated\Model\OrganizationMemberUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationMembersResponse::class => false,
                \Vendor\Library\Generated\Model\InvitationCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationCreateRequestOrganization::class => false,
                \Vendor\Library\Generated\Model\OrganizationLimits::class => false,
                \Vendor\Library\Generated\Model\ActiveRegionsResponse::class => false,
                \Vendor\Library\Generated\Model\RegionResponse::class => false,
                \Vendor\Library\Generated\Model\CurrentUserAuthAccount::class => false,
                \Vendor\Library\Generated\Model\LinkedAuthAccount::class => false,
                \Vendor\Library\Generated\Model\UpdateUserInfoRequest::class => false,
                \Vendor\Library\Generated\Model\CurrentUserInfoResponse::class => false,
                \Vendor\Library\Generated\Model\ConvertUserToOrgRequest::class => false,
                \Vendor\Library\Generated\Model\CurrentUserInfoAuthResponse::class => false,
                \Vendor\Library\Generated\Model\AuthDetailsResponse::class => false,
                \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest::class => false,
                \Vendor\Library\Generated\Model\VerifyUserPasswordRequest::class => false,
                \Vendor\Library\Generated\Model\EndpointSettingsData::class => false,
                \Vendor\Library\Generated\Model\ProjectQuota::class => false,
                \Vendor\Library\Generated\Model\DefaultEndpointSettings::class => false,
                \Vendor\Library\Generated\Model\HealthCheck::class => false,
                \Vendor\Library\Generated\Model\ProjectOwnerData::class => false,
                \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponse::class => false,
                \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponseLimitsItem::class => false,
                \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponseProjectsItem::class => false,
                \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => false,
                \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTResponse::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationRequest::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateNewUserRequest::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateNewUserResponse::class => false,
                \Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectRequest::class => false,
                \Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectResponse::class => false,
                \Vendor\Library\Generated\Model\ListNeonAuthIntegrationsResponse::class => false,
                \Vendor\Library\Generated\Model\NeonAuthIntegration::class => false,
                \Vendor\Library\Generated\Model\GeneralError::class => false,
                \Vendor\Library\Generated\Model\BranchOperations::class => false,
                \Vendor\Library\Generated\Model\EndpointOperations::class => false,
                \Vendor\Library\Generated\Model\DatabaseOperations::class => false,
                \Vendor\Library\Generated\Model\RoleOperations::class => false,
                \Vendor\Library\Generated\Model\JWKSCreationOperation::class => false,
                \Vendor\Library\Generated\Model\AnnotationData::class => false,
                \Vendor\Library\Generated\Model\AnnotationObjectData::class => false,
                \Vendor\Library\Generated\Model\AnnotationCreateValueRequest::class => false,
                \Vendor\Library\Generated\Model\AnnotationResponse::class => false,
                \Vendor\Library\Generated\Model\AnnotationsMapResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectsApplicationsMapResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectsIntegrationsMapResponse::class => false,
                \Vendor\Library\Generated\Model\CursorPaginationResponse::class => false,
                \Vendor\Library\Generated\Model\CursorPagination::class => false,
                \Vendor\Library\Generated\Model\Snapshot::class => false,
                \Vendor\Library\Generated\Model\ResponseListOperations::class => false,
                \Vendor\Library\Generated\Model\ResponseCreatedProject::class => false,
                \Vendor\Library\Generated\Model\ResponseCreatedBranch::class => false,
                \Vendor\Library\Generated\Model\ProjectsGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdPatchResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesPostBody::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesCountGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesBranchIdGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryProjectsGetResponse200::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = [
            
            \Vendor\Library\Generated\Model\PaginationResponse::class => \Vendor\Library\Generated\Normalizer\PaginationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\Pagination::class => \Vendor\Library\Generated\Normalizer\PaginationNormalizer::class,
            
            \Vendor\Library\Generated\Model\EmptyResponse::class => \Vendor\Library\Generated\Normalizer\EmptyResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\AddProjectJWKSRequest::class => \Vendor\Library\Generated\Normalizer\AddProjectJWKSRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\JWKS::class => \Vendor\Library\Generated\Normalizer\JWKSNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectJWKSResponse::class => \Vendor\Library\Generated\Normalizer\ProjectJWKSResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeyCreateRequest::class => \Vendor\Library\Generated\Normalizer\ApiKeyCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrgApiKeyCreateRequest::class => \Vendor\Library\Generated\Normalizer\OrgApiKeyCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeyCreateResponse::class => \Vendor\Library\Generated\Normalizer\ApiKeyCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrgApiKeyCreateResponse::class => \Vendor\Library\Generated\Normalizer\OrgApiKeyCreateResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeyRevokeResponse::class => \Vendor\Library\Generated\Normalizer\ApiKeyRevokeResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrgApiKeyRevokeResponse::class => \Vendor\Library\Generated\Normalizer\OrgApiKeyRevokeResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeysListResponseItem::class => \Vendor\Library\Generated\Normalizer\ApiKeysListResponseItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class => \Vendor\Library\Generated\Normalizer\OrgApiKeysListResponseItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ApiKeyCreatorData::class => \Vendor\Library\Generated\Normalizer\ApiKeyCreatorDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\Operation::class => \Vendor\Library\Generated\Normalizer\OperationNormalizer::class,
            
            \Vendor\Library\Generated\Model\OperationResponse::class => \Vendor\Library\Generated\Normalizer\OperationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OperationsResponse::class => \Vendor\Library\Generated\Normalizer\OperationsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectListItem::class => \Vendor\Library\Generated\Normalizer\ProjectListItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\Project::class => \Vendor\Library\Generated\Normalizer\ProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectCreateRequest::class => \Vendor\Library\Generated\Normalizer\ProjectCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectCreateRequestProject::class => \Vendor\Library\Generated\Normalizer\ProjectCreateRequestProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectCreateRequestProjectBranch::class => \Vendor\Library\Generated\Normalizer\ProjectCreateRequestProjectBranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectUpdateRequest::class => \Vendor\Library\Generated\Normalizer\ProjectUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class => \Vendor\Library\Generated\Normalizer\ProjectUpdateRequestProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectSettingsData::class => \Vendor\Library\Generated\Normalizer\ProjectSettingsDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectResponse::class => \Vendor\Library\Generated\Normalizer\ProjectResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsResponse::class => \Vendor\Library\Generated\Normalizer\ProjectsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectPermission::class => \Vendor\Library\Generated\Normalizer\ProjectPermissionNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectPermissions::class => \Vendor\Library\Generated\Normalizer\ProjectPermissionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\GrantPermissionToProjectRequest::class => \Vendor\Library\Generated\Normalizer\GrantPermissionToProjectRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerAccountResponse::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerAccountResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerProjectResponse::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerProjectResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerProject::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerPeriod::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerPeriodNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryPerTimeframe::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryPerTimeframeNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectLimits::class => \Vendor\Library\Generated\Normalizer\ProjectLimitsNormalizer::class,
            
            \Vendor\Library\Generated\Model\Limits::class => \Vendor\Library\Generated\Normalizer\LimitsNormalizer::class,
            
            \Vendor\Library\Generated\Model\LimitsPerProject::class => \Vendor\Library\Generated\Normalizer\LimitsPerProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\AvailablePreloadLibrary::class => \Vendor\Library\Generated\Normalizer\AvailablePreloadLibraryNormalizer::class,
            
            \Vendor\Library\Generated\Model\AvailablePreloadLibraries::class => \Vendor\Library\Generated\Normalizer\AvailablePreloadLibrariesNormalizer::class,
            
            \Vendor\Library\Generated\Model\Branch::class => \Vendor\Library\Generated\Normalizer\BranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchCreatedBy::class => \Vendor\Library\Generated\Normalizer\BranchCreatedByNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchCreateRequestEndpointOptions::class => \Vendor\Library\Generated\Normalizer\BranchCreateRequestEndpointOptionsNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchCreateRequest::class => \Vendor\Library\Generated\Normalizer\BranchCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class => \Vendor\Library\Generated\Normalizer\BranchCreateRequestBranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchUpdateRequest::class => \Vendor\Library\Generated\Normalizer\BranchUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchUpdateRequestBranch::class => \Vendor\Library\Generated\Normalizer\BranchUpdateRequestBranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchRestoreRequest::class => \Vendor\Library\Generated\Normalizer\BranchRestoreRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchResponse::class => \Vendor\Library\Generated\Normalizer\BranchResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchSchemaResponse::class => \Vendor\Library\Generated\Normalizer\BranchSchemaResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchSchemaCompareResponse::class => \Vendor\Library\Generated\Normalizer\BranchSchemaCompareResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchesResponse::class => \Vendor\Library\Generated\Normalizer\BranchesResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchesCountResponse::class => \Vendor\Library\Generated\Normalizer\BranchesCountResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionParameters::class => \Vendor\Library\Generated\Normalizer\ConnectionParametersNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionDetails::class => \Vendor\Library\Generated\Normalizer\ConnectionDetailsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionURIResponse::class => \Vendor\Library\Generated\Normalizer\ConnectionURIResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\Endpoint::class => \Vendor\Library\Generated\Normalizer\EndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\AllowedIps::class => \Vendor\Library\Generated\Normalizer\AllowedIpsNormalizer::class,
            
            \Vendor\Library\Generated\Model\MaintenanceWindow::class => \Vendor\Library\Generated\Normalizer\MaintenanceWindowNormalizer::class,
            
            \Vendor\Library\Generated\Model\PreloadLibraries::class => \Vendor\Library\Generated\Normalizer\PreloadLibrariesNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointCreateRequest::class => \Vendor\Library\Generated\Normalizer\EndpointCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class => \Vendor\Library\Generated\Normalizer\EndpointCreateRequestEndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointUpdateRequest::class => \Vendor\Library\Generated\Normalizer\EndpointUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointUpdateRequestEndpoint::class => \Vendor\Library\Generated\Normalizer\EndpointUpdateRequestEndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointResponse::class => \Vendor\Library\Generated\Normalizer\EndpointResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionURIsResponse::class => \Vendor\Library\Generated\Normalizer\ConnectionURIsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConnectionURIsOptionalResponse::class => \Vendor\Library\Generated\Normalizer\ConnectionURIsOptionalResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\VPCEndpointsResponse::class => \Vendor\Library\Generated\Normalizer\VPCEndpointsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\VPCEndpoint::class => \Vendor\Library\Generated\Normalizer\VPCEndpointNormalizer::class,
            
            \Vendor\Library\Generated\Model\VPCEndpointDetails::class => \Vendor\Library\Generated\Normalizer\VPCEndpointDetailsNormalizer::class,
            
            \Vendor\Library\Generated\Model\VPCEndpointAssignment::class => \Vendor\Library\Generated\Normalizer\VPCEndpointAssignmentNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointsResponse::class => \Vendor\Library\Generated\Normalizer\EndpointsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointPasswordlessSessionAuthRequest::class => \Vendor\Library\Generated\Normalizer\EndpointPasswordlessSessionAuthRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\StatementResult::class => \Vendor\Library\Generated\Normalizer\StatementResultNormalizer::class,
            
            \Vendor\Library\Generated\Model\StatementData::class => \Vendor\Library\Generated\Normalizer\StatementDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ExplainData::class => \Vendor\Library\Generated\Normalizer\ExplainDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\Role::class => \Vendor\Library\Generated\Normalizer\RoleNormalizer::class,
            
            \Vendor\Library\Generated\Model\RoleCreateRequest::class => \Vendor\Library\Generated\Normalizer\RoleCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\RoleCreateRequestRole::class => \Vendor\Library\Generated\Normalizer\RoleCreateRequestRoleNormalizer::class,
            
            \Vendor\Library\Generated\Model\RoleResponse::class => \Vendor\Library\Generated\Normalizer\RoleResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\JWKSResponse::class => \Vendor\Library\Generated\Normalizer\JWKSResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\RolesResponse::class => \Vendor\Library\Generated\Normalizer\RolesResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\RolePasswordResponse::class => \Vendor\Library\Generated\Normalizer\RolePasswordResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\PaymentSourceBankCard::class => \Vendor\Library\Generated\Normalizer\PaymentSourceBankCardNormalizer::class,
            
            \Vendor\Library\Generated\Model\PaymentSource::class => \Vendor\Library\Generated\Normalizer\PaymentSourceNormalizer::class,
            
            \Vendor\Library\Generated\Model\BillingAccount::class => \Vendor\Library\Generated\Normalizer\BillingAccountNormalizer::class,
            
            \Vendor\Library\Generated\Model\Database::class => \Vendor\Library\Generated\Normalizer\DatabaseNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseCreateRequest::class => \Vendor\Library\Generated\Normalizer\DatabaseCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseCreateRequestDatabase::class => \Vendor\Library\Generated\Normalizer\DatabaseCreateRequestDatabaseNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseUpdateRequest::class => \Vendor\Library\Generated\Normalizer\DatabaseUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseUpdateRequestDatabase::class => \Vendor\Library\Generated\Normalizer\DatabaseUpdateRequestDatabaseNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseResponse::class => \Vendor\Library\Generated\Normalizer\DatabaseResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabasesResponse::class => \Vendor\Library\Generated\Normalizer\DatabasesResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\Invitation::class => \Vendor\Library\Generated\Normalizer\InvitationNormalizer::class,
            
            \Vendor\Library\Generated\Model\Member::class => \Vendor\Library\Generated\Normalizer\MemberNormalizer::class,
            
            \Vendor\Library\Generated\Model\MemberUserInfo::class => \Vendor\Library\Generated\Normalizer\MemberUserInfoNormalizer::class,
            
            \Vendor\Library\Generated\Model\MemberWithUser::class => \Vendor\Library\Generated\Normalizer\MemberWithUserNormalizer::class,
            
            \Vendor\Library\Generated\Model\Organization::class => \Vendor\Library\Generated\Normalizer\OrganizationNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationsResponse::class => \Vendor\Library\Generated\Normalizer\OrganizationsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationsUpdateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationsUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationInvitationsResponse::class => \Vendor\Library\Generated\Normalizer\OrganizationInvitationsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationInviteCreateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationInviteCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationInvitesCreateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationInvitesCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationInviteUpdateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationInviteUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationGuest::class => \Vendor\Library\Generated\Normalizer\OrganizationGuestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationMemberUpdateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationMemberUpdateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationMembersResponse::class => \Vendor\Library\Generated\Normalizer\OrganizationMembersResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\InvitationCreateRequest::class => \Vendor\Library\Generated\Normalizer\InvitationCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationCreateRequest::class => \Vendor\Library\Generated\Normalizer\OrganizationCreateRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationCreateRequestOrganization::class => \Vendor\Library\Generated\Normalizer\OrganizationCreateRequestOrganizationNormalizer::class,
            
            \Vendor\Library\Generated\Model\OrganizationLimits::class => \Vendor\Library\Generated\Normalizer\OrganizationLimitsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ActiveRegionsResponse::class => \Vendor\Library\Generated\Normalizer\ActiveRegionsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\RegionResponse::class => \Vendor\Library\Generated\Normalizer\RegionResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\CurrentUserAuthAccount::class => \Vendor\Library\Generated\Normalizer\CurrentUserAuthAccountNormalizer::class,
            
            \Vendor\Library\Generated\Model\LinkedAuthAccount::class => \Vendor\Library\Generated\Normalizer\LinkedAuthAccountNormalizer::class,
            
            \Vendor\Library\Generated\Model\UpdateUserInfoRequest::class => \Vendor\Library\Generated\Normalizer\UpdateUserInfoRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\CurrentUserInfoResponse::class => \Vendor\Library\Generated\Normalizer\CurrentUserInfoResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ConvertUserToOrgRequest::class => \Vendor\Library\Generated\Normalizer\ConvertUserToOrgRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\CurrentUserInfoAuthResponse::class => \Vendor\Library\Generated\Normalizer\CurrentUserInfoAuthResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\AuthDetailsResponse::class => \Vendor\Library\Generated\Normalizer\AuthDetailsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest::class => \Vendor\Library\Generated\Normalizer\TransferProjectsToOrganizationRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\VerifyUserPasswordRequest::class => \Vendor\Library\Generated\Normalizer\VerifyUserPasswordRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointSettingsData::class => \Vendor\Library\Generated\Normalizer\EndpointSettingsDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectQuota::class => \Vendor\Library\Generated\Normalizer\ProjectQuotaNormalizer::class,
            
            \Vendor\Library\Generated\Model\DefaultEndpointSettings::class => \Vendor\Library\Generated\Normalizer\DefaultEndpointSettingsNormalizer::class,
            
            \Vendor\Library\Generated\Model\HealthCheck::class => \Vendor\Library\Generated\Normalizer\HealthCheckNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectOwnerData::class => \Vendor\Library\Generated\Normalizer\ProjectOwnerDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponse::class => \Vendor\Library\Generated\Normalizer\LimitsUnsatisfiedResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponseLimitsItem::class => \Vendor\Library\Generated\Normalizer\LimitsUnsatisfiedResponseLimitsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponse::class => \Vendor\Library\Generated\Normalizer\ProjectsWithIntegrationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponseProjectsItem::class => \Vendor\Library\Generated\Normalizer\ProjectsWithIntegrationResponseProjectsItemNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => \Vendor\Library\Generated\Normalizer\NeonSupernovaCreatePostgRESTRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTResponse::class => \Vendor\Library\Generated\Normalizer\NeonSupernovaCreatePostgRESTResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationRequest::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateIntegrationRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateIntegrationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateAuthProviderSDKKeysRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateNewUserRequest::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateNewUserRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthCreateNewUserResponse::class => \Vendor\Library\Generated\Normalizer\NeonAuthCreateNewUserResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectRequest::class => \Vendor\Library\Generated\Normalizer\NeonAuthTransferAuthProviderProjectRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectResponse::class => \Vendor\Library\Generated\Normalizer\NeonAuthTransferAuthProviderProjectResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ListNeonAuthIntegrationsResponse::class => \Vendor\Library\Generated\Normalizer\ListNeonAuthIntegrationsResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\NeonAuthIntegration::class => \Vendor\Library\Generated\Normalizer\NeonAuthIntegrationNormalizer::class,
            
            \Vendor\Library\Generated\Model\GeneralError::class => \Vendor\Library\Generated\Normalizer\GeneralErrorNormalizer::class,
            
            \Vendor\Library\Generated\Model\BranchOperations::class => \Vendor\Library\Generated\Normalizer\BranchOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\EndpointOperations::class => \Vendor\Library\Generated\Normalizer\EndpointOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\DatabaseOperations::class => \Vendor\Library\Generated\Normalizer\DatabaseOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\RoleOperations::class => \Vendor\Library\Generated\Normalizer\RoleOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\JWKSCreationOperation::class => \Vendor\Library\Generated\Normalizer\JWKSCreationOperationNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationData::class => \Vendor\Library\Generated\Normalizer\AnnotationDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationObjectData::class => \Vendor\Library\Generated\Normalizer\AnnotationObjectDataNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationCreateValueRequest::class => \Vendor\Library\Generated\Normalizer\AnnotationCreateValueRequestNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationResponse::class => \Vendor\Library\Generated\Normalizer\AnnotationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\AnnotationsMapResponse::class => \Vendor\Library\Generated\Normalizer\AnnotationsMapResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsApplicationsMapResponse::class => \Vendor\Library\Generated\Normalizer\ProjectsApplicationsMapResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsIntegrationsMapResponse::class => \Vendor\Library\Generated\Normalizer\ProjectsIntegrationsMapResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\CursorPaginationResponse::class => \Vendor\Library\Generated\Normalizer\CursorPaginationResponseNormalizer::class,
            
            \Vendor\Library\Generated\Model\CursorPagination::class => \Vendor\Library\Generated\Normalizer\CursorPaginationNormalizer::class,
            
            \Vendor\Library\Generated\Model\Snapshot::class => \Vendor\Library\Generated\Normalizer\SnapshotNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResponseListOperations::class => \Vendor\Library\Generated\Normalizer\ResponseListOperationsNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResponseCreatedProject::class => \Vendor\Library\Generated\Normalizer\ResponseCreatedProjectNormalizer::class,
            
            \Vendor\Library\Generated\Model\ResponseCreatedBranch::class => \Vendor\Library\Generated\Normalizer\ResponseCreatedBranchNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsSharedGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdPatchResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdPatchResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdBranchesGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesPostBody::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdBranchesPostBodyNormalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesCountGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdBranchesCountGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesBranchIdGetResponse200::class => \Vendor\Library\Generated\Normalizer\ProjectsProjectIdBranchesBranchIdGetResponse200Normalizer::class,
            
            \Vendor\Library\Generated\Model\ConsumptionHistoryProjectsGetResponse200::class => \Vendor\Library\Generated\Normalizer\ConsumptionHistoryProjectsGetResponse200Normalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Vendor\Library\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
        ], $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [
                
                \Vendor\Library\Generated\Model\PaginationResponse::class => false,
                \Vendor\Library\Generated\Model\Pagination::class => false,
                \Vendor\Library\Generated\Model\EmptyResponse::class => false,
                \Vendor\Library\Generated\Model\AddProjectJWKSRequest::class => false,
                \Vendor\Library\Generated\Model\JWKS::class => false,
                \Vendor\Library\Generated\Model\ProjectJWKSResponse::class => false,
                \Vendor\Library\Generated\Model\ApiKeyCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrgApiKeyCreateRequest::class => false,
                \Vendor\Library\Generated\Model\ApiKeyCreateResponse::class => false,
                \Vendor\Library\Generated\Model\OrgApiKeyCreateResponse::class => false,
                \Vendor\Library\Generated\Model\ApiKeyRevokeResponse::class => false,
                \Vendor\Library\Generated\Model\OrgApiKeyRevokeResponse::class => false,
                \Vendor\Library\Generated\Model\ApiKeysListResponseItem::class => false,
                \Vendor\Library\Generated\Model\OrgApiKeysListResponseItem::class => false,
                \Vendor\Library\Generated\Model\ApiKeyCreatorData::class => false,
                \Vendor\Library\Generated\Model\Operation::class => false,
                \Vendor\Library\Generated\Model\OperationResponse::class => false,
                \Vendor\Library\Generated\Model\OperationsResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectListItem::class => false,
                \Vendor\Library\Generated\Model\Project::class => false,
                \Vendor\Library\Generated\Model\ProjectCreateRequest::class => false,
                \Vendor\Library\Generated\Model\ProjectCreateRequestProject::class => false,
                \Vendor\Library\Generated\Model\ProjectCreateRequestProjectBranch::class => false,
                \Vendor\Library\Generated\Model\ProjectUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\ProjectUpdateRequestProject::class => false,
                \Vendor\Library\Generated\Model\ProjectSettingsData::class => false,
                \Vendor\Library\Generated\Model\ProjectResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectsResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectPermission::class => false,
                \Vendor\Library\Generated\Model\ProjectPermissions::class => false,
                \Vendor\Library\Generated\Model\GrantPermissionToProjectRequest::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerAccountResponse::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerProjectResponse::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerProject::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerPeriod::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryPerTimeframe::class => false,
                \Vendor\Library\Generated\Model\ProjectLimits::class => false,
                \Vendor\Library\Generated\Model\Limits::class => false,
                \Vendor\Library\Generated\Model\LimitsPerProject::class => false,
                \Vendor\Library\Generated\Model\AvailablePreloadLibrary::class => false,
                \Vendor\Library\Generated\Model\AvailablePreloadLibraries::class => false,
                \Vendor\Library\Generated\Model\Branch::class => false,
                \Vendor\Library\Generated\Model\BranchCreatedBy::class => false,
                \Vendor\Library\Generated\Model\BranchCreateRequestEndpointOptions::class => false,
                \Vendor\Library\Generated\Model\BranchCreateRequest::class => false,
                \Vendor\Library\Generated\Model\BranchCreateRequestBranch::class => false,
                \Vendor\Library\Generated\Model\BranchUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\BranchUpdateRequestBranch::class => false,
                \Vendor\Library\Generated\Model\BranchRestoreRequest::class => false,
                \Vendor\Library\Generated\Model\BranchResponse::class => false,
                \Vendor\Library\Generated\Model\BranchSchemaResponse::class => false,
                \Vendor\Library\Generated\Model\BranchSchemaCompareResponse::class => false,
                \Vendor\Library\Generated\Model\BranchesResponse::class => false,
                \Vendor\Library\Generated\Model\BranchesCountResponse::class => false,
                \Vendor\Library\Generated\Model\ConnectionParameters::class => false,
                \Vendor\Library\Generated\Model\ConnectionDetails::class => false,
                \Vendor\Library\Generated\Model\ConnectionURIResponse::class => false,
                \Vendor\Library\Generated\Model\Endpoint::class => false,
                \Vendor\Library\Generated\Model\AllowedIps::class => false,
                \Vendor\Library\Generated\Model\MaintenanceWindow::class => false,
                \Vendor\Library\Generated\Model\PreloadLibraries::class => false,
                \Vendor\Library\Generated\Model\EndpointCreateRequest::class => false,
                \Vendor\Library\Generated\Model\EndpointCreateRequestEndpoint::class => false,
                \Vendor\Library\Generated\Model\EndpointUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\EndpointUpdateRequestEndpoint::class => false,
                \Vendor\Library\Generated\Model\EndpointResponse::class => false,
                \Vendor\Library\Generated\Model\ConnectionURIsResponse::class => false,
                \Vendor\Library\Generated\Model\ConnectionURIsOptionalResponse::class => false,
                \Vendor\Library\Generated\Model\VPCEndpointsResponse::class => false,
                \Vendor\Library\Generated\Model\VPCEndpoint::class => false,
                \Vendor\Library\Generated\Model\VPCEndpointDetails::class => false,
                \Vendor\Library\Generated\Model\VPCEndpointAssignment::class => false,
                \Vendor\Library\Generated\Model\EndpointsResponse::class => false,
                \Vendor\Library\Generated\Model\EndpointPasswordlessSessionAuthRequest::class => false,
                \Vendor\Library\Generated\Model\StatementResult::class => false,
                \Vendor\Library\Generated\Model\StatementData::class => false,
                \Vendor\Library\Generated\Model\ExplainData::class => false,
                \Vendor\Library\Generated\Model\Role::class => false,
                \Vendor\Library\Generated\Model\RoleCreateRequest::class => false,
                \Vendor\Library\Generated\Model\RoleCreateRequestRole::class => false,
                \Vendor\Library\Generated\Model\RoleResponse::class => false,
                \Vendor\Library\Generated\Model\JWKSResponse::class => false,
                \Vendor\Library\Generated\Model\RolesResponse::class => false,
                \Vendor\Library\Generated\Model\RolePasswordResponse::class => false,
                \Vendor\Library\Generated\Model\PaymentSourceBankCard::class => false,
                \Vendor\Library\Generated\Model\PaymentSource::class => false,
                \Vendor\Library\Generated\Model\BillingAccount::class => false,
                \Vendor\Library\Generated\Model\Database::class => false,
                \Vendor\Library\Generated\Model\DatabaseCreateRequest::class => false,
                \Vendor\Library\Generated\Model\DatabaseCreateRequestDatabase::class => false,
                \Vendor\Library\Generated\Model\DatabaseUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\DatabaseUpdateRequestDatabase::class => false,
                \Vendor\Library\Generated\Model\DatabaseResponse::class => false,
                \Vendor\Library\Generated\Model\DatabasesResponse::class => false,
                \Vendor\Library\Generated\Model\Invitation::class => false,
                \Vendor\Library\Generated\Model\Member::class => false,
                \Vendor\Library\Generated\Model\MemberUserInfo::class => false,
                \Vendor\Library\Generated\Model\MemberWithUser::class => false,
                \Vendor\Library\Generated\Model\Organization::class => false,
                \Vendor\Library\Generated\Model\OrganizationsResponse::class => false,
                \Vendor\Library\Generated\Model\OrganizationsUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationInvitationsResponse::class => false,
                \Vendor\Library\Generated\Model\OrganizationInviteCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationInvitesCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationInviteUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationGuest::class => false,
                \Vendor\Library\Generated\Model\OrganizationMemberUpdateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationMembersResponse::class => false,
                \Vendor\Library\Generated\Model\InvitationCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationCreateRequest::class => false,
                \Vendor\Library\Generated\Model\OrganizationCreateRequestOrganization::class => false,
                \Vendor\Library\Generated\Model\OrganizationLimits::class => false,
                \Vendor\Library\Generated\Model\ActiveRegionsResponse::class => false,
                \Vendor\Library\Generated\Model\RegionResponse::class => false,
                \Vendor\Library\Generated\Model\CurrentUserAuthAccount::class => false,
                \Vendor\Library\Generated\Model\LinkedAuthAccount::class => false,
                \Vendor\Library\Generated\Model\UpdateUserInfoRequest::class => false,
                \Vendor\Library\Generated\Model\CurrentUserInfoResponse::class => false,
                \Vendor\Library\Generated\Model\ConvertUserToOrgRequest::class => false,
                \Vendor\Library\Generated\Model\CurrentUserInfoAuthResponse::class => false,
                \Vendor\Library\Generated\Model\AuthDetailsResponse::class => false,
                \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest::class => false,
                \Vendor\Library\Generated\Model\VerifyUserPasswordRequest::class => false,
                \Vendor\Library\Generated\Model\EndpointSettingsData::class => false,
                \Vendor\Library\Generated\Model\ProjectQuota::class => false,
                \Vendor\Library\Generated\Model\DefaultEndpointSettings::class => false,
                \Vendor\Library\Generated\Model\HealthCheck::class => false,
                \Vendor\Library\Generated\Model\ProjectOwnerData::class => false,
                \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponse::class => false,
                \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponseLimitsItem::class => false,
                \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponseProjectsItem::class => false,
                \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => false,
                \Vendor\Library\Generated\Model\NeonSupernovaCreatePostgRESTResponse::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationRequest::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateNewUserRequest::class => false,
                \Vendor\Library\Generated\Model\NeonAuthCreateNewUserResponse::class => false,
                \Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectRequest::class => false,
                \Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectResponse::class => false,
                \Vendor\Library\Generated\Model\ListNeonAuthIntegrationsResponse::class => false,
                \Vendor\Library\Generated\Model\NeonAuthIntegration::class => false,
                \Vendor\Library\Generated\Model\GeneralError::class => false,
                \Vendor\Library\Generated\Model\BranchOperations::class => false,
                \Vendor\Library\Generated\Model\EndpointOperations::class => false,
                \Vendor\Library\Generated\Model\DatabaseOperations::class => false,
                \Vendor\Library\Generated\Model\RoleOperations::class => false,
                \Vendor\Library\Generated\Model\JWKSCreationOperation::class => false,
                \Vendor\Library\Generated\Model\AnnotationData::class => false,
                \Vendor\Library\Generated\Model\AnnotationObjectData::class => false,
                \Vendor\Library\Generated\Model\AnnotationCreateValueRequest::class => false,
                \Vendor\Library\Generated\Model\AnnotationResponse::class => false,
                \Vendor\Library\Generated\Model\AnnotationsMapResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectsApplicationsMapResponse::class => false,
                \Vendor\Library\Generated\Model\ProjectsIntegrationsMapResponse::class => false,
                \Vendor\Library\Generated\Model\CursorPaginationResponse::class => false,
                \Vendor\Library\Generated\Model\CursorPagination::class => false,
                \Vendor\Library\Generated\Model\Snapshot::class => false,
                \Vendor\Library\Generated\Model\ResponseListOperations::class => false,
                \Vendor\Library\Generated\Model\ResponseCreatedProject::class => false,
                \Vendor\Library\Generated\Model\ResponseCreatedBranch::class => false,
                \Vendor\Library\Generated\Model\ProjectsGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsSharedGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdPatchResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesPostBody::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesCountGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesBranchIdGetResponse200::class => false,
                \Vendor\Library\Generated\Model\ConsumptionHistoryProjectsGetResponse200::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}