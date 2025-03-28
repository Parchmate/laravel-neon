<?php

namespace Vendor\Library\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Vendor\Library\Generated\Runtime\Normalizer\CheckArray;
use Vendor\Library\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class LimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Limits::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Limits::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Limits();
            if (\array_key_exists('max_autoscaling_cu', $data) && \is_int($data['max_autoscaling_cu'])) {
                $data['max_autoscaling_cu'] = (double) $data['max_autoscaling_cu'];
            }
            if (\array_key_exists('max_fixed_size_cu', $data) && \is_int($data['max_fixed_size_cu'])) {
                $data['max_fixed_size_cu'] = (double) $data['max_fixed_size_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_time', $data)) {
                $object->setActiveTime($data['active_time']);
                unset($data['active_time']);
            }
            if (\array_key_exists('max_projects', $data)) {
                $object->setMaxProjects($data['max_projects']);
                unset($data['max_projects']);
            }
            if (\array_key_exists('max_branches', $data)) {
                $object->setMaxBranches($data['max_branches']);
                unset($data['max_branches']);
            }
            if (\array_key_exists('max_protected_branches', $data)) {
                $object->setMaxProtectedBranches($data['max_protected_branches']);
                unset($data['max_protected_branches']);
            }
            if (\array_key_exists('max_autoscaling_cu', $data)) {
                $object->setMaxAutoscalingCu($data['max_autoscaling_cu']);
                unset($data['max_autoscaling_cu']);
            }
            if (\array_key_exists('max_fixed_size_cu', $data)) {
                $object->setMaxFixedSizeCu($data['max_fixed_size_cu']);
                unset($data['max_fixed_size_cu']);
            }
            if (\array_key_exists('cpu_seconds', $data)) {
                $object->setCpuSeconds($data['cpu_seconds']);
                unset($data['cpu_seconds']);
            }
            if (\array_key_exists('max_compute_time_non_primary', $data)) {
                $object->setMaxComputeTimeNonPrimary($data['max_compute_time_non_primary']);
                unset($data['max_compute_time_non_primary']);
            }
            if (\array_key_exists('max_active_endpoints', $data)) {
                $object->setMaxActiveEndpoints($data['max_active_endpoints']);
                unset($data['max_active_endpoints']);
            }
            if (\array_key_exists('max_read_only_endpoints', $data)) {
                $object->setMaxReadOnlyEndpoints($data['max_read_only_endpoints']);
                unset($data['max_read_only_endpoints']);
            }
            if (\array_key_exists('max_allowed_ips', $data)) {
                $object->setMaxAllowedIps($data['max_allowed_ips']);
                unset($data['max_allowed_ips']);
            }
            if (\array_key_exists('max_vpc_endpoints_per_region', $data)) {
                $object->setMaxVpcEndpointsPerRegion($data['max_vpc_endpoints_per_region']);
                unset($data['max_vpc_endpoints_per_region']);
            }
            if (\array_key_exists('max_monitoring_retention_hours', $data)) {
                $object->setMaxMonitoringRetentionHours($data['max_monitoring_retention_hours']);
                unset($data['max_monitoring_retention_hours']);
            }
            if (\array_key_exists('max_history_retention_seconds', $data)) {
                $object->setMaxHistoryRetentionSeconds($data['max_history_retention_seconds']);
                unset($data['max_history_retention_seconds']);
            }
            if (\array_key_exists('min_autosuspend_seconds', $data)) {
                $object->setMinAutosuspendSeconds($data['min_autosuspend_seconds']);
                unset($data['min_autosuspend_seconds']);
            }
            if (\array_key_exists('max_data_transfer', $data)) {
                $object->setMaxDataTransfer($data['max_data_transfer']);
                unset($data['max_data_transfer']);
            }
            if (\array_key_exists('min_idle_seconds_to_autoarchive', $data)) {
                $object->setMinIdleSecondsToAutoarchive($data['min_idle_seconds_to_autoarchive']);
                unset($data['min_idle_seconds_to_autoarchive']);
            }
            if (\array_key_exists('min_age_seconds_to_autoarchive', $data)) {
                $object->setMinAgeSecondsToAutoarchive($data['min_age_seconds_to_autoarchive']);
                unset($data['min_age_seconds_to_autoarchive']);
            }
            if (\array_key_exists('max_branch_roles', $data)) {
                $object->setMaxBranchRoles($data['max_branch_roles']);
                unset($data['max_branch_roles']);
            }
            if (\array_key_exists('max_branch_databases', $data)) {
                $object->setMaxBranchDatabases($data['max_branch_databases']);
                unset($data['max_branch_databases']);
            }
            if (\array_key_exists('max_concurrent_scheduled_operation_chains_per_project', $data)) {
                $object->setMaxConcurrentScheduledOperationChainsPerProject($data['max_concurrent_scheduled_operation_chains_per_project']);
                unset($data['max_concurrent_scheduled_operation_chains_per_project']);
            }
            if (\array_key_exists('max_concurrent_executing_operation_chains_per_project', $data)) {
                $object->setMaxConcurrentExecutingOperationChainsPerProject($data['max_concurrent_executing_operation_chains_per_project']);
                unset($data['max_concurrent_executing_operation_chains_per_project']);
            }
            if (\array_key_exists('max_root_branches', $data)) {
                $object->setMaxRootBranches($data['max_root_branches']);
                unset($data['max_root_branches']);
            }
            if (\array_key_exists('max_import_size', $data)) {
                $object->setMaxImportSize($data['max_import_size']);
                unset($data['max_import_size']);
            }
            if (\array_key_exists('max_organization_members', $data)) {
                $object->setMaxOrganizationMembers($data['max_organization_members']);
                unset($data['max_organization_members']);
            }
            if (\array_key_exists('per_project', $data)) {
                $object->setPerProject($this->denormalizer->denormalize($data['per_project'], \Vendor\Library\Generated\Model\LimitsPerProject::class, 'json', $context));
                unset($data['per_project']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['active_time'] = $object->getActiveTime();
            $data['max_projects'] = $object->getMaxProjects();
            $data['max_branches'] = $object->getMaxBranches();
            $data['max_protected_branches'] = $object->getMaxProtectedBranches();
            $data['max_autoscaling_cu'] = $object->getMaxAutoscalingCu();
            $data['max_fixed_size_cu'] = $object->getMaxFixedSizeCu();
            $data['cpu_seconds'] = $object->getCpuSeconds();
            $data['max_compute_time_non_primary'] = $object->getMaxComputeTimeNonPrimary();
            $data['max_active_endpoints'] = $object->getMaxActiveEndpoints();
            $data['max_read_only_endpoints'] = $object->getMaxReadOnlyEndpoints();
            $data['max_allowed_ips'] = $object->getMaxAllowedIps();
            $data['max_vpc_endpoints_per_region'] = $object->getMaxVpcEndpointsPerRegion();
            $data['max_monitoring_retention_hours'] = $object->getMaxMonitoringRetentionHours();
            $data['max_history_retention_seconds'] = $object->getMaxHistoryRetentionSeconds();
            $data['min_autosuspend_seconds'] = $object->getMinAutosuspendSeconds();
            $data['max_data_transfer'] = $object->getMaxDataTransfer();
            $data['min_idle_seconds_to_autoarchive'] = $object->getMinIdleSecondsToAutoarchive();
            $data['min_age_seconds_to_autoarchive'] = $object->getMinAgeSecondsToAutoarchive();
            $data['max_branch_roles'] = $object->getMaxBranchRoles();
            $data['max_branch_databases'] = $object->getMaxBranchDatabases();
            $data['max_concurrent_scheduled_operation_chains_per_project'] = $object->getMaxConcurrentScheduledOperationChainsPerProject();
            $data['max_concurrent_executing_operation_chains_per_project'] = $object->getMaxConcurrentExecutingOperationChainsPerProject();
            $data['max_root_branches'] = $object->getMaxRootBranches();
            $data['max_import_size'] = $object->getMaxImportSize();
            $data['max_organization_members'] = $object->getMaxOrganizationMembers();
            $data['per_project'] = $this->normalizer->normalize($object->getPerProject(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Limits::class => false];
        }
    }
} else {
    class LimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Vendor\Library\Generated\Model\Limits::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Vendor\Library\Generated\Model\Limits::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Vendor\Library\Generated\Model\Limits();
            if (\array_key_exists('max_autoscaling_cu', $data) && \is_int($data['max_autoscaling_cu'])) {
                $data['max_autoscaling_cu'] = (double) $data['max_autoscaling_cu'];
            }
            if (\array_key_exists('max_fixed_size_cu', $data) && \is_int($data['max_fixed_size_cu'])) {
                $data['max_fixed_size_cu'] = (double) $data['max_fixed_size_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_time', $data)) {
                $object->setActiveTime($data['active_time']);
                unset($data['active_time']);
            }
            if (\array_key_exists('max_projects', $data)) {
                $object->setMaxProjects($data['max_projects']);
                unset($data['max_projects']);
            }
            if (\array_key_exists('max_branches', $data)) {
                $object->setMaxBranches($data['max_branches']);
                unset($data['max_branches']);
            }
            if (\array_key_exists('max_protected_branches', $data)) {
                $object->setMaxProtectedBranches($data['max_protected_branches']);
                unset($data['max_protected_branches']);
            }
            if (\array_key_exists('max_autoscaling_cu', $data)) {
                $object->setMaxAutoscalingCu($data['max_autoscaling_cu']);
                unset($data['max_autoscaling_cu']);
            }
            if (\array_key_exists('max_fixed_size_cu', $data)) {
                $object->setMaxFixedSizeCu($data['max_fixed_size_cu']);
                unset($data['max_fixed_size_cu']);
            }
            if (\array_key_exists('cpu_seconds', $data)) {
                $object->setCpuSeconds($data['cpu_seconds']);
                unset($data['cpu_seconds']);
            }
            if (\array_key_exists('max_compute_time_non_primary', $data)) {
                $object->setMaxComputeTimeNonPrimary($data['max_compute_time_non_primary']);
                unset($data['max_compute_time_non_primary']);
            }
            if (\array_key_exists('max_active_endpoints', $data)) {
                $object->setMaxActiveEndpoints($data['max_active_endpoints']);
                unset($data['max_active_endpoints']);
            }
            if (\array_key_exists('max_read_only_endpoints', $data)) {
                $object->setMaxReadOnlyEndpoints($data['max_read_only_endpoints']);
                unset($data['max_read_only_endpoints']);
            }
            if (\array_key_exists('max_allowed_ips', $data)) {
                $object->setMaxAllowedIps($data['max_allowed_ips']);
                unset($data['max_allowed_ips']);
            }
            if (\array_key_exists('max_vpc_endpoints_per_region', $data)) {
                $object->setMaxVpcEndpointsPerRegion($data['max_vpc_endpoints_per_region']);
                unset($data['max_vpc_endpoints_per_region']);
            }
            if (\array_key_exists('max_monitoring_retention_hours', $data)) {
                $object->setMaxMonitoringRetentionHours($data['max_monitoring_retention_hours']);
                unset($data['max_monitoring_retention_hours']);
            }
            if (\array_key_exists('max_history_retention_seconds', $data)) {
                $object->setMaxHistoryRetentionSeconds($data['max_history_retention_seconds']);
                unset($data['max_history_retention_seconds']);
            }
            if (\array_key_exists('min_autosuspend_seconds', $data)) {
                $object->setMinAutosuspendSeconds($data['min_autosuspend_seconds']);
                unset($data['min_autosuspend_seconds']);
            }
            if (\array_key_exists('max_data_transfer', $data)) {
                $object->setMaxDataTransfer($data['max_data_transfer']);
                unset($data['max_data_transfer']);
            }
            if (\array_key_exists('min_idle_seconds_to_autoarchive', $data)) {
                $object->setMinIdleSecondsToAutoarchive($data['min_idle_seconds_to_autoarchive']);
                unset($data['min_idle_seconds_to_autoarchive']);
            }
            if (\array_key_exists('min_age_seconds_to_autoarchive', $data)) {
                $object->setMinAgeSecondsToAutoarchive($data['min_age_seconds_to_autoarchive']);
                unset($data['min_age_seconds_to_autoarchive']);
            }
            if (\array_key_exists('max_branch_roles', $data)) {
                $object->setMaxBranchRoles($data['max_branch_roles']);
                unset($data['max_branch_roles']);
            }
            if (\array_key_exists('max_branch_databases', $data)) {
                $object->setMaxBranchDatabases($data['max_branch_databases']);
                unset($data['max_branch_databases']);
            }
            if (\array_key_exists('max_concurrent_scheduled_operation_chains_per_project', $data)) {
                $object->setMaxConcurrentScheduledOperationChainsPerProject($data['max_concurrent_scheduled_operation_chains_per_project']);
                unset($data['max_concurrent_scheduled_operation_chains_per_project']);
            }
            if (\array_key_exists('max_concurrent_executing_operation_chains_per_project', $data)) {
                $object->setMaxConcurrentExecutingOperationChainsPerProject($data['max_concurrent_executing_operation_chains_per_project']);
                unset($data['max_concurrent_executing_operation_chains_per_project']);
            }
            if (\array_key_exists('max_root_branches', $data)) {
                $object->setMaxRootBranches($data['max_root_branches']);
                unset($data['max_root_branches']);
            }
            if (\array_key_exists('max_import_size', $data)) {
                $object->setMaxImportSize($data['max_import_size']);
                unset($data['max_import_size']);
            }
            if (\array_key_exists('max_organization_members', $data)) {
                $object->setMaxOrganizationMembers($data['max_organization_members']);
                unset($data['max_organization_members']);
            }
            if (\array_key_exists('per_project', $data)) {
                $object->setPerProject($this->denormalizer->denormalize($data['per_project'], \Vendor\Library\Generated\Model\LimitsPerProject::class, 'json', $context));
                unset($data['per_project']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            $data['active_time'] = $object->getActiveTime();
            $data['max_projects'] = $object->getMaxProjects();
            $data['max_branches'] = $object->getMaxBranches();
            $data['max_protected_branches'] = $object->getMaxProtectedBranches();
            $data['max_autoscaling_cu'] = $object->getMaxAutoscalingCu();
            $data['max_fixed_size_cu'] = $object->getMaxFixedSizeCu();
            $data['cpu_seconds'] = $object->getCpuSeconds();
            $data['max_compute_time_non_primary'] = $object->getMaxComputeTimeNonPrimary();
            $data['max_active_endpoints'] = $object->getMaxActiveEndpoints();
            $data['max_read_only_endpoints'] = $object->getMaxReadOnlyEndpoints();
            $data['max_allowed_ips'] = $object->getMaxAllowedIps();
            $data['max_vpc_endpoints_per_region'] = $object->getMaxVpcEndpointsPerRegion();
            $data['max_monitoring_retention_hours'] = $object->getMaxMonitoringRetentionHours();
            $data['max_history_retention_seconds'] = $object->getMaxHistoryRetentionSeconds();
            $data['min_autosuspend_seconds'] = $object->getMinAutosuspendSeconds();
            $data['max_data_transfer'] = $object->getMaxDataTransfer();
            $data['min_idle_seconds_to_autoarchive'] = $object->getMinIdleSecondsToAutoarchive();
            $data['min_age_seconds_to_autoarchive'] = $object->getMinAgeSecondsToAutoarchive();
            $data['max_branch_roles'] = $object->getMaxBranchRoles();
            $data['max_branch_databases'] = $object->getMaxBranchDatabases();
            $data['max_concurrent_scheduled_operation_chains_per_project'] = $object->getMaxConcurrentScheduledOperationChainsPerProject();
            $data['max_concurrent_executing_operation_chains_per_project'] = $object->getMaxConcurrentExecutingOperationChainsPerProject();
            $data['max_root_branches'] = $object->getMaxRootBranches();
            $data['max_import_size'] = $object->getMaxImportSize();
            $data['max_organization_members'] = $object->getMaxOrganizationMembers();
            $data['per_project'] = $this->normalizer->normalize($object->getPerProject(), 'json', $context);
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Vendor\Library\Generated\Model\Limits::class => false];
        }
    }
}