<?php

namespace Parchmate\LaravelNeon\Generated\Normalizer;

use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\CheckArray;
use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\ValidatorTrait;
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
            
            \Parchmate\LaravelNeon\Generated\Model\PaginationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\PaginationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Pagination::class => \Parchmate\LaravelNeon\Generated\Normalizer\PaginationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EmptyResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\EmptyResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AddProjectJWKSRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\AddProjectJWKSRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\JWKS::class => \Parchmate\LaravelNeon\Generated\Normalizer\JWKSNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectJWKSResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectJWKSResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeyCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrgApiKeyCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeyCreateResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyCreateResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrgApiKeyCreateResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeyRevokeResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeyRevokeResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyRevokeResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrgApiKeyRevokeResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeysListResponseItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeysListResponseItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrgApiKeysListResponseItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrgApiKeysListResponseItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreatorData::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeyCreatorDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Operation::class => \Parchmate\LaravelNeon\Generated\Normalizer\OperationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OperationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OperationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OperationsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OperationsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectListItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectListItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Project::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequestProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectCreateRequestProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequestProjectBranch::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectCreateRequestProjectBranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectUpdateRequestProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectUpdateRequestProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectSettingsDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectPermission::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectPermissionNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectPermissions::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectPermissionsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\GrantPermissionToProjectRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\GrantPermissionToProjectRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerAccountResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerAccountResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerProjectResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerProjectResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerPeriodNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerTimeframeNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectLimits::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectLimitsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Limits::class => \Parchmate\LaravelNeon\Generated\Normalizer\LimitsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\LimitsPerProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\LimitsPerProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AvailablePreloadLibrary::class => \Parchmate\LaravelNeon\Generated\Normalizer\AvailablePreloadLibraryNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AvailablePreloadLibraries::class => \Parchmate\LaravelNeon\Generated\Normalizer\AvailablePreloadLibrariesNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Branch::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchCreatedBy::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchCreatedByNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequestEndpointOptions::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchCreateRequestEndpointOptionsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequestBranch::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchCreateRequestBranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchUpdateRequestBranch::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchUpdateRequestBranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchRestoreRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchRestoreRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchSchemaResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchSchemaResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchSchemaCompareResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchSchemaCompareResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchesResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchesResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchesCountResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchesCountResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionParameters::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionParametersNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionDetails::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionDetailsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionURIResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionURIResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Endpoint::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AllowedIps::class => \Parchmate\LaravelNeon\Generated\Normalizer\AllowedIpsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\MaintenanceWindow::class => \Parchmate\LaravelNeon\Generated\Normalizer\MaintenanceWindowNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\PreloadLibraries::class => \Parchmate\LaravelNeon\Generated\Normalizer\PreloadLibrariesNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequestEndpoint::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointCreateRequestEndpointNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequestEndpoint::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointUpdateRequestEndpointNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionURIsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionURIsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionURIsOptionalResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionURIsOptionalResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VPCEndpointsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\VPCEndpointsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VPCEndpoint::class => \Parchmate\LaravelNeon\Generated\Normalizer\VPCEndpointNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class => \Parchmate\LaravelNeon\Generated\Normalizer\VPCEndpointDetailsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VPCEndpointAssignment::class => \Parchmate\LaravelNeon\Generated\Normalizer\VPCEndpointAssignmentNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointPasswordlessSessionAuthRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointPasswordlessSessionAuthRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\StatementResult::class => \Parchmate\LaravelNeon\Generated\Normalizer\StatementResultNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\StatementData::class => \Parchmate\LaravelNeon\Generated\Normalizer\StatementDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ExplainData::class => \Parchmate\LaravelNeon\Generated\Normalizer\ExplainDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Role::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RoleCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RoleCreateRequestRole::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleCreateRequestRoleNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RoleResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\JWKSResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\JWKSResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RolesResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\RolesResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RolePasswordResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\RolePasswordResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class => \Parchmate\LaravelNeon\Generated\Normalizer\PaymentSourceBankCardNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\PaymentSource::class => \Parchmate\LaravelNeon\Generated\Normalizer\PaymentSourceNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BillingAccount::class => \Parchmate\LaravelNeon\Generated\Normalizer\BillingAccountNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Database::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseCreateRequestDatabase::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseCreateRequestDatabaseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseUpdateRequestDatabase::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseUpdateRequestDatabaseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabasesResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabasesResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Invitation::class => \Parchmate\LaravelNeon\Generated\Normalizer\InvitationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Member::class => \Parchmate\LaravelNeon\Generated\Normalizer\MemberNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\MemberUserInfo::class => \Parchmate\LaravelNeon\Generated\Normalizer\MemberUserInfoNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\MemberWithUser::class => \Parchmate\LaravelNeon\Generated\Normalizer\MemberWithUserNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Organization::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationsUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationsUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationInvitationsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationInvitationsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationInviteCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationInviteCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationInvitesCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationInvitesCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationInviteUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationInviteUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationGuest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationGuestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationMemberUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationMemberUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationMembersResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationMembersResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\InvitationCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\InvitationCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationCreateRequestOrganization::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationCreateRequestOrganizationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationLimits::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationLimitsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ActiveRegionsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ActiveRegionsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RegionResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\RegionResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CurrentUserAuthAccount::class => \Parchmate\LaravelNeon\Generated\Normalizer\CurrentUserAuthAccountNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\LinkedAuthAccount::class => \Parchmate\LaravelNeon\Generated\Normalizer\LinkedAuthAccountNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\UpdateUserInfoRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\UpdateUserInfoRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\CurrentUserInfoResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConvertUserToOrgRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConvertUserToOrgRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\CurrentUserInfoAuthResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AuthDetailsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\AuthDetailsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\TransferProjectsToOrganizationRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\TransferProjectsToOrganizationRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VerifyUserPasswordRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\VerifyUserPasswordRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointSettingsData::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointSettingsDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectQuota::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectQuotaNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DefaultEndpointSettings::class => \Parchmate\LaravelNeon\Generated\Normalizer\DefaultEndpointSettingsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\HealthCheck::class => \Parchmate\LaravelNeon\Generated\Normalizer\HealthCheckNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectOwnerData::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectOwnerDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\LimitsUnsatisfiedResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponseLimitsItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\LimitsUnsatisfiedResponseLimitsItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsWithIntegrationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponseProjectsItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsWithIntegrationResponseProjectsItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonSupernovaCreatePostgRESTRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonSupernovaCreatePostgRESTResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonSupernovaCreatePostgRESTResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateIntegrationRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateIntegrationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateAuthProviderSDKKeysRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateNewUserRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateNewUserRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateNewUserResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateNewUserResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthTransferAuthProviderProjectRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthTransferAuthProviderProjectRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthTransferAuthProviderProjectResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthTransferAuthProviderProjectResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ListNeonAuthIntegrationsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ListNeonAuthIntegrationsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthIntegrationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\GeneralError::class => \Parchmate\LaravelNeon\Generated\Normalizer\GeneralErrorNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RoleOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\JWKSCreationOperation::class => \Parchmate\LaravelNeon\Generated\Normalizer\JWKSCreationOperationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationData::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationObjectData::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationObjectDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationCreateValueRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationCreateValueRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationsMapResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationsMapResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsApplicationsMapResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsApplicationsMapResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsIntegrationsMapResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsIntegrationsMapResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CursorPaginationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\CursorPaginationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CursorPagination::class => \Parchmate\LaravelNeon\Generated\Normalizer\CursorPaginationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Snapshot::class => \Parchmate\LaravelNeon\Generated\Normalizer\SnapshotNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ResponseListOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\ResponseListOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\ResponseCreatedProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedBranch::class => \Parchmate\LaravelNeon\Generated\Normalizer\ResponseCreatedBranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsSharedGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsSharedGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdPatchResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdPatchResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdBranchesGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesPostBody::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdBranchesPostBodyNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesCountGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdBranchesCountGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesBranchIdGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdBranchesBranchIdGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryProjectsGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryProjectsGetResponse200Normalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Parchmate\LaravelNeon\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
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
                
                \Parchmate\LaravelNeon\Generated\Model\PaginationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Pagination::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EmptyResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AddProjectJWKSRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\JWKS::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectJWKSResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyCreateResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeyRevokeResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyRevokeResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeysListResponseItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrgApiKeysListResponseItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreatorData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Operation::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OperationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OperationsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectListItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Project::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequestProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequestProjectBranch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectUpdateRequestProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectPermission::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectPermissions::class => false,
                \Parchmate\LaravelNeon\Generated\Model\GrantPermissionToProjectRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerAccountResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerProjectResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectLimits::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Limits::class => false,
                \Parchmate\LaravelNeon\Generated\Model\LimitsPerProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AvailablePreloadLibrary::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AvailablePreloadLibraries::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Branch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchCreatedBy::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequestEndpointOptions::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequestBranch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchUpdateRequestBranch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchRestoreRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchSchemaResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchSchemaCompareResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchesResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchesCountResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionParameters::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionDetails::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionURIResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Endpoint::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AllowedIps::class => false,
                \Parchmate\LaravelNeon\Generated\Model\MaintenanceWindow::class => false,
                \Parchmate\LaravelNeon\Generated\Model\PreloadLibraries::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequestEndpoint::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequestEndpoint::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionURIsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionURIsOptionalResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VPCEndpointsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VPCEndpoint::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VPCEndpointAssignment::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointPasswordlessSessionAuthRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\StatementResult::class => false,
                \Parchmate\LaravelNeon\Generated\Model\StatementData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ExplainData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Role::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RoleCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RoleCreateRequestRole::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RoleResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\JWKSResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RolesResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RolePasswordResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class => false,
                \Parchmate\LaravelNeon\Generated\Model\PaymentSource::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BillingAccount::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Database::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseCreateRequestDatabase::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseUpdateRequestDatabase::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabasesResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Invitation::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Member::class => false,
                \Parchmate\LaravelNeon\Generated\Model\MemberUserInfo::class => false,
                \Parchmate\LaravelNeon\Generated\Model\MemberWithUser::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Organization::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationsUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationInvitationsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationInviteCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationInvitesCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationInviteUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationGuest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationMemberUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationMembersResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\InvitationCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationCreateRequestOrganization::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationLimits::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ActiveRegionsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RegionResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CurrentUserAuthAccount::class => false,
                \Parchmate\LaravelNeon\Generated\Model\LinkedAuthAccount::class => false,
                \Parchmate\LaravelNeon\Generated\Model\UpdateUserInfoRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConvertUserToOrgRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AuthDetailsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\TransferProjectsToOrganizationRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VerifyUserPasswordRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointSettingsData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectQuota::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DefaultEndpointSettings::class => false,
                \Parchmate\LaravelNeon\Generated\Model\HealthCheck::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectOwnerData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponseLimitsItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponseProjectsItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonSupernovaCreatePostgRESTResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateNewUserRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateNewUserResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthTransferAuthProviderProjectRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthTransferAuthProviderProjectResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ListNeonAuthIntegrationsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class => false,
                \Parchmate\LaravelNeon\Generated\Model\GeneralError::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RoleOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\JWKSCreationOperation::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationObjectData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationCreateValueRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationsMapResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsApplicationsMapResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsIntegrationsMapResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CursorPaginationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CursorPagination::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Snapshot::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ResponseListOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedBranch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsSharedGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdPatchResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesPostBody::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesCountGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesBranchIdGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryProjectsGetResponse200::class => false,
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
            
            \Parchmate\LaravelNeon\Generated\Model\PaginationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\PaginationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Pagination::class => \Parchmate\LaravelNeon\Generated\Normalizer\PaginationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EmptyResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\EmptyResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AddProjectJWKSRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\AddProjectJWKSRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\JWKS::class => \Parchmate\LaravelNeon\Generated\Normalizer\JWKSNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectJWKSResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectJWKSResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeyCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrgApiKeyCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeyCreateResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyCreateResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrgApiKeyCreateResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeyRevokeResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeyRevokeResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyRevokeResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrgApiKeyRevokeResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeysListResponseItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeysListResponseItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrgApiKeysListResponseItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrgApiKeysListResponseItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreatorData::class => \Parchmate\LaravelNeon\Generated\Normalizer\ApiKeyCreatorDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Operation::class => \Parchmate\LaravelNeon\Generated\Normalizer\OperationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OperationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OperationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OperationsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OperationsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectListItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectListItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Project::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequestProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectCreateRequestProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequestProjectBranch::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectCreateRequestProjectBranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectUpdateRequestProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectUpdateRequestProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectSettingsDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectPermission::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectPermissionNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectPermissions::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectPermissionsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\GrantPermissionToProjectRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\GrantPermissionToProjectRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerAccountResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerAccountResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerProjectResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerProjectResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerPeriodNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryPerTimeframeNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectLimits::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectLimitsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Limits::class => \Parchmate\LaravelNeon\Generated\Normalizer\LimitsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\LimitsPerProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\LimitsPerProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AvailablePreloadLibrary::class => \Parchmate\LaravelNeon\Generated\Normalizer\AvailablePreloadLibraryNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AvailablePreloadLibraries::class => \Parchmate\LaravelNeon\Generated\Normalizer\AvailablePreloadLibrariesNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Branch::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchCreatedBy::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchCreatedByNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequestEndpointOptions::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchCreateRequestEndpointOptionsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequestBranch::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchCreateRequestBranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchUpdateRequestBranch::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchUpdateRequestBranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchRestoreRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchRestoreRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchSchemaResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchSchemaResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchSchemaCompareResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchSchemaCompareResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchesResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchesResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchesCountResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchesCountResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionParameters::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionParametersNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionDetails::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionDetailsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionURIResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionURIResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Endpoint::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AllowedIps::class => \Parchmate\LaravelNeon\Generated\Normalizer\AllowedIpsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\MaintenanceWindow::class => \Parchmate\LaravelNeon\Generated\Normalizer\MaintenanceWindowNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\PreloadLibraries::class => \Parchmate\LaravelNeon\Generated\Normalizer\PreloadLibrariesNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequestEndpoint::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointCreateRequestEndpointNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequestEndpoint::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointUpdateRequestEndpointNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionURIsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionURIsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConnectionURIsOptionalResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConnectionURIsOptionalResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VPCEndpointsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\VPCEndpointsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VPCEndpoint::class => \Parchmate\LaravelNeon\Generated\Normalizer\VPCEndpointNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class => \Parchmate\LaravelNeon\Generated\Normalizer\VPCEndpointDetailsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VPCEndpointAssignment::class => \Parchmate\LaravelNeon\Generated\Normalizer\VPCEndpointAssignmentNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointPasswordlessSessionAuthRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointPasswordlessSessionAuthRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\StatementResult::class => \Parchmate\LaravelNeon\Generated\Normalizer\StatementResultNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\StatementData::class => \Parchmate\LaravelNeon\Generated\Normalizer\StatementDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ExplainData::class => \Parchmate\LaravelNeon\Generated\Normalizer\ExplainDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Role::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RoleCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RoleCreateRequestRole::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleCreateRequestRoleNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RoleResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\JWKSResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\JWKSResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RolesResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\RolesResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RolePasswordResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\RolePasswordResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class => \Parchmate\LaravelNeon\Generated\Normalizer\PaymentSourceBankCardNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\PaymentSource::class => \Parchmate\LaravelNeon\Generated\Normalizer\PaymentSourceNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BillingAccount::class => \Parchmate\LaravelNeon\Generated\Normalizer\BillingAccountNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Database::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseCreateRequestDatabase::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseCreateRequestDatabaseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseUpdateRequestDatabase::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseUpdateRequestDatabaseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabasesResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabasesResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Invitation::class => \Parchmate\LaravelNeon\Generated\Normalizer\InvitationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Member::class => \Parchmate\LaravelNeon\Generated\Normalizer\MemberNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\MemberUserInfo::class => \Parchmate\LaravelNeon\Generated\Normalizer\MemberUserInfoNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\MemberWithUser::class => \Parchmate\LaravelNeon\Generated\Normalizer\MemberWithUserNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Organization::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationsUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationsUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationInvitationsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationInvitationsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationInviteCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationInviteCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationInvitesCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationInvitesCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationInviteUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationInviteUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationGuest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationGuestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationMemberUpdateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationMemberUpdateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationMembersResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationMembersResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\InvitationCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\InvitationCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationCreateRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationCreateRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationCreateRequestOrganization::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationCreateRequestOrganizationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\OrganizationLimits::class => \Parchmate\LaravelNeon\Generated\Normalizer\OrganizationLimitsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ActiveRegionsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ActiveRegionsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RegionResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\RegionResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CurrentUserAuthAccount::class => \Parchmate\LaravelNeon\Generated\Normalizer\CurrentUserAuthAccountNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\LinkedAuthAccount::class => \Parchmate\LaravelNeon\Generated\Normalizer\LinkedAuthAccountNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\UpdateUserInfoRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\UpdateUserInfoRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\CurrentUserInfoResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConvertUserToOrgRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConvertUserToOrgRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\CurrentUserInfoAuthResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AuthDetailsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\AuthDetailsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\TransferProjectsToOrganizationRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\TransferProjectsToOrganizationRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\VerifyUserPasswordRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\VerifyUserPasswordRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointSettingsData::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointSettingsDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectQuota::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectQuotaNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DefaultEndpointSettings::class => \Parchmate\LaravelNeon\Generated\Normalizer\DefaultEndpointSettingsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\HealthCheck::class => \Parchmate\LaravelNeon\Generated\Normalizer\HealthCheckNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectOwnerData::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectOwnerDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\LimitsUnsatisfiedResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponseLimitsItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\LimitsUnsatisfiedResponseLimitsItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsWithIntegrationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponseProjectsItem::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsWithIntegrationResponseProjectsItemNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonSupernovaCreatePostgRESTRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonSupernovaCreatePostgRESTResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonSupernovaCreatePostgRESTResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateIntegrationRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateIntegrationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateAuthProviderSDKKeysRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateNewUserRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateNewUserRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateNewUserResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthCreateNewUserResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthTransferAuthProviderProjectRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthTransferAuthProviderProjectRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthTransferAuthProviderProjectResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthTransferAuthProviderProjectResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ListNeonAuthIntegrationsResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ListNeonAuthIntegrationsResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class => \Parchmate\LaravelNeon\Generated\Normalizer\NeonAuthIntegrationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\GeneralError::class => \Parchmate\LaravelNeon\Generated\Normalizer\GeneralErrorNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\BranchOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\BranchOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\EndpointOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\DatabaseOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\DatabaseOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\RoleOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\RoleOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\JWKSCreationOperation::class => \Parchmate\LaravelNeon\Generated\Normalizer\JWKSCreationOperationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationData::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationObjectData::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationObjectDataNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationCreateValueRequest::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationCreateValueRequestNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\AnnotationsMapResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\AnnotationsMapResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsApplicationsMapResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsApplicationsMapResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsIntegrationsMapResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsIntegrationsMapResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CursorPaginationResponse::class => \Parchmate\LaravelNeon\Generated\Normalizer\CursorPaginationResponseNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\CursorPagination::class => \Parchmate\LaravelNeon\Generated\Normalizer\CursorPaginationNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\Snapshot::class => \Parchmate\LaravelNeon\Generated\Normalizer\SnapshotNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ResponseListOperations::class => \Parchmate\LaravelNeon\Generated\Normalizer\ResponseListOperationsNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class => \Parchmate\LaravelNeon\Generated\Normalizer\ResponseCreatedProjectNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedBranch::class => \Parchmate\LaravelNeon\Generated\Normalizer\ResponseCreatedBranchNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsSharedGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsSharedGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdPatchResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdPatchResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdBranchesGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesPostBody::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdBranchesPostBodyNormalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesCountGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdBranchesCountGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesBranchIdGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ProjectsProjectIdBranchesBranchIdGetResponse200Normalizer::class,
            
            \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryProjectsGetResponse200::class => \Parchmate\LaravelNeon\Generated\Normalizer\ConsumptionHistoryProjectsGetResponse200Normalizer::class,
            
            \Jane\Component\JsonSchemaRuntime\Reference::class => \Parchmate\LaravelNeon\Generated\Runtime\Normalizer\ReferenceNormalizer::class,
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
                
                \Parchmate\LaravelNeon\Generated\Model\PaginationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Pagination::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EmptyResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AddProjectJWKSRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\JWKS::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectJWKSResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyCreateResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeyRevokeResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrgApiKeyRevokeResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeysListResponseItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrgApiKeysListResponseItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreatorData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Operation::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OperationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OperationsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectListItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Project::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequestProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectCreateRequestProjectBranch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectUpdateRequestProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectSettingsData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectPermission::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectPermissions::class => false,
                \Parchmate\LaravelNeon\Generated\Model\GrantPermissionToProjectRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerAccountResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerProjectResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerPeriod::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryPerTimeframe::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectLimits::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Limits::class => false,
                \Parchmate\LaravelNeon\Generated\Model\LimitsPerProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AvailablePreloadLibrary::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AvailablePreloadLibraries::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Branch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchCreatedBy::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequestEndpointOptions::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchCreateRequestBranch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchUpdateRequestBranch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchRestoreRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchSchemaResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchSchemaCompareResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchesResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchesCountResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionParameters::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionDetails::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionURIResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Endpoint::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AllowedIps::class => false,
                \Parchmate\LaravelNeon\Generated\Model\MaintenanceWindow::class => false,
                \Parchmate\LaravelNeon\Generated\Model\PreloadLibraries::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequestEndpoint::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequestEndpoint::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionURIsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConnectionURIsOptionalResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VPCEndpointsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VPCEndpoint::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VPCEndpointDetails::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VPCEndpointAssignment::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointPasswordlessSessionAuthRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\StatementResult::class => false,
                \Parchmate\LaravelNeon\Generated\Model\StatementData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ExplainData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Role::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RoleCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RoleCreateRequestRole::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RoleResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\JWKSResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RolesResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RolePasswordResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\PaymentSourceBankCard::class => false,
                \Parchmate\LaravelNeon\Generated\Model\PaymentSource::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BillingAccount::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Database::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseCreateRequestDatabase::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseUpdateRequestDatabase::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabasesResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Invitation::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Member::class => false,
                \Parchmate\LaravelNeon\Generated\Model\MemberUserInfo::class => false,
                \Parchmate\LaravelNeon\Generated\Model\MemberWithUser::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Organization::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationsUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationInvitationsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationInviteCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationInvitesCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationInviteUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationGuest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationMemberUpdateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationMembersResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\InvitationCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationCreateRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationCreateRequestOrganization::class => false,
                \Parchmate\LaravelNeon\Generated\Model\OrganizationLimits::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ActiveRegionsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RegionResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CurrentUserAuthAccount::class => false,
                \Parchmate\LaravelNeon\Generated\Model\LinkedAuthAccount::class => false,
                \Parchmate\LaravelNeon\Generated\Model\UpdateUserInfoRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConvertUserToOrgRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CurrentUserInfoAuthResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AuthDetailsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\TransferProjectsToOrganizationRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\VerifyUserPasswordRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointSettingsData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectQuota::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DefaultEndpointSettings::class => false,
                \Parchmate\LaravelNeon\Generated\Model\HealthCheck::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectOwnerData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponseLimitsItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponseProjectsItem::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonSupernovaCreatePostgRESTRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonSupernovaCreatePostgRESTResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateNewUserRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateNewUserResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthTransferAuthProviderProjectRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthTransferAuthProviderProjectResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ListNeonAuthIntegrationsResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\NeonAuthIntegration::class => false,
                \Parchmate\LaravelNeon\Generated\Model\GeneralError::class => false,
                \Parchmate\LaravelNeon\Generated\Model\BranchOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\EndpointOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\DatabaseOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\RoleOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\JWKSCreationOperation::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationObjectData::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationCreateValueRequest::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\AnnotationsMapResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsApplicationsMapResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsIntegrationsMapResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CursorPaginationResponse::class => false,
                \Parchmate\LaravelNeon\Generated\Model\CursorPagination::class => false,
                \Parchmate\LaravelNeon\Generated\Model\Snapshot::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ResponseListOperations::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedProject::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ResponseCreatedBranch::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsSharedGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdPatchResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesPostBody::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesCountGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesBranchIdGetResponse200::class => false,
                \Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryProjectsGetResponse200::class => false,
                \Jane\Component\JsonSchemaRuntime\Reference::class => false,
            ];
        }
    }
}