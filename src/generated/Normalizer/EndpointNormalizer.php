<?php

namespace Parchmate\LaravelNeon\Generated\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\CheckArray;
use Parchmate\LaravelNeon\Generated\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class EndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\Endpoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\Endpoint::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Parchmate\LaravelNeon\Generated\Model\Endpoint();
            if (\array_key_exists('autoscaling_limit_min_cu', $data) && \is_int($data['autoscaling_limit_min_cu'])) {
                $data['autoscaling_limit_min_cu'] = (double) $data['autoscaling_limit_min_cu'];
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data) && \is_int($data['autoscaling_limit_max_cu'])) {
                $data['autoscaling_limit_max_cu'] = (double) $data['autoscaling_limit_max_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('host', $data)) {
                $object->setHost($data['host']);
                unset($data['host']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('autoscaling_limit_min_cu', $data)) {
                $object->setAutoscalingLimitMinCu($data['autoscaling_limit_min_cu']);
                unset($data['autoscaling_limit_min_cu']);
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data)) {
                $object->setAutoscalingLimitMaxCu($data['autoscaling_limit_max_cu']);
                unset($data['autoscaling_limit_max_cu']);
            }
            if (\array_key_exists('region_id', $data)) {
                $object->setRegionId($data['region_id']);
                unset($data['region_id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('current_state', $data)) {
                $object->setCurrentState($data['current_state']);
                unset($data['current_state']);
            }
            if (\array_key_exists('pending_state', $data)) {
                $object->setPendingState($data['pending_state']);
                unset($data['pending_state']);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], \Parchmate\LaravelNeon\Generated\Model\EndpointSettingsData::class, 'json', $context));
                unset($data['settings']);
            }
            if (\array_key_exists('pooler_enabled', $data)) {
                $object->setPoolerEnabled($data['pooler_enabled']);
                unset($data['pooler_enabled']);
            }
            if (\array_key_exists('pooler_mode', $data)) {
                $object->setPoolerMode($data['pooler_mode']);
                unset($data['pooler_mode']);
            }
            if (\array_key_exists('disabled', $data)) {
                $object->setDisabled($data['disabled']);
                unset($data['disabled']);
            }
            if (\array_key_exists('passwordless_access', $data)) {
                $object->setPasswordlessAccess($data['passwordless_access']);
                unset($data['passwordless_access']);
            }
            if (\array_key_exists('last_active', $data)) {
                $object->setLastActive(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_active']));
                unset($data['last_active']);
            }
            if (\array_key_exists('creation_source', $data)) {
                $object->setCreationSource($data['creation_source']);
                unset($data['creation_source']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('started_at', $data)) {
                $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']));
                unset($data['started_at']);
            }
            if (\array_key_exists('proxy_host', $data)) {
                $object->setProxyHost($data['proxy_host']);
                unset($data['proxy_host']);
            }
            if (\array_key_exists('suspend_timeout_seconds', $data)) {
                $object->setSuspendTimeoutSeconds($data['suspend_timeout_seconds']);
                unset($data['suspend_timeout_seconds']);
            }
            if (\array_key_exists('provisioner', $data)) {
                $object->setProvisioner($data['provisioner']);
                unset($data['provisioner']);
            }
            if (\array_key_exists('compute_release_version', $data)) {
                $object->setComputeReleaseVersion($data['compute_release_version']);
                unset($data['compute_release_version']);
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
            $data['host'] = $object->getHost();
            $data['id'] = $object->getId();
            $data['project_id'] = $object->getProjectId();
            $data['branch_id'] = $object->getBranchId();
            $data['autoscaling_limit_min_cu'] = $object->getAutoscalingLimitMinCu();
            $data['autoscaling_limit_max_cu'] = $object->getAutoscalingLimitMaxCu();
            $data['region_id'] = $object->getRegionId();
            $data['type'] = $object->getType();
            $data['current_state'] = $object->getCurrentState();
            if ($object->isInitialized('pendingState') && null !== $object->getPendingState()) {
                $data['pending_state'] = $object->getPendingState();
            }
            $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            $data['pooler_enabled'] = $object->getPoolerEnabled();
            $data['pooler_mode'] = $object->getPoolerMode();
            $data['disabled'] = $object->getDisabled();
            $data['passwordless_access'] = $object->getPasswordlessAccess();
            if ($object->isInitialized('lastActive') && null !== $object->getLastActive()) {
                $data['last_active'] = $object->getLastActive()?->format('Y-m-d\TH:i:sP');
            }
            $data['creation_source'] = $object->getCreationSource();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['started_at'] = $object->getStartedAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['proxy_host'] = $object->getProxyHost();
            $data['suspend_timeout_seconds'] = $object->getSuspendTimeoutSeconds();
            $data['provisioner'] = $object->getProvisioner();
            if ($object->isInitialized('computeReleaseVersion') && null !== $object->getComputeReleaseVersion()) {
                $data['compute_release_version'] = $object->getComputeReleaseVersion();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\Endpoint::class => false];
        }
    }
} else {
    class EndpointNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Parchmate\LaravelNeon\Generated\Model\Endpoint::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \Parchmate\LaravelNeon\Generated\Model\Endpoint::class;
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
            $object = new \Parchmate\LaravelNeon\Generated\Model\Endpoint();
            if (\array_key_exists('autoscaling_limit_min_cu', $data) && \is_int($data['autoscaling_limit_min_cu'])) {
                $data['autoscaling_limit_min_cu'] = (double) $data['autoscaling_limit_min_cu'];
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data) && \is_int($data['autoscaling_limit_max_cu'])) {
                $data['autoscaling_limit_max_cu'] = (double) $data['autoscaling_limit_max_cu'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('host', $data)) {
                $object->setHost($data['host']);
                unset($data['host']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('project_id', $data)) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            }
            if (\array_key_exists('branch_id', $data)) {
                $object->setBranchId($data['branch_id']);
                unset($data['branch_id']);
            }
            if (\array_key_exists('autoscaling_limit_min_cu', $data)) {
                $object->setAutoscalingLimitMinCu($data['autoscaling_limit_min_cu']);
                unset($data['autoscaling_limit_min_cu']);
            }
            if (\array_key_exists('autoscaling_limit_max_cu', $data)) {
                $object->setAutoscalingLimitMaxCu($data['autoscaling_limit_max_cu']);
                unset($data['autoscaling_limit_max_cu']);
            }
            if (\array_key_exists('region_id', $data)) {
                $object->setRegionId($data['region_id']);
                unset($data['region_id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('current_state', $data)) {
                $object->setCurrentState($data['current_state']);
                unset($data['current_state']);
            }
            if (\array_key_exists('pending_state', $data)) {
                $object->setPendingState($data['pending_state']);
                unset($data['pending_state']);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], \Parchmate\LaravelNeon\Generated\Model\EndpointSettingsData::class, 'json', $context));
                unset($data['settings']);
            }
            if (\array_key_exists('pooler_enabled', $data)) {
                $object->setPoolerEnabled($data['pooler_enabled']);
                unset($data['pooler_enabled']);
            }
            if (\array_key_exists('pooler_mode', $data)) {
                $object->setPoolerMode($data['pooler_mode']);
                unset($data['pooler_mode']);
            }
            if (\array_key_exists('disabled', $data)) {
                $object->setDisabled($data['disabled']);
                unset($data['disabled']);
            }
            if (\array_key_exists('passwordless_access', $data)) {
                $object->setPasswordlessAccess($data['passwordless_access']);
                unset($data['passwordless_access']);
            }
            if (\array_key_exists('last_active', $data)) {
                $object->setLastActive(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['last_active']));
                unset($data['last_active']);
            }
            if (\array_key_exists('creation_source', $data)) {
                $object->setCreationSource($data['creation_source']);
                unset($data['creation_source']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_at']));
                unset($data['created_at']);
            }
            if (\array_key_exists('updated_at', $data)) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['updated_at']));
                unset($data['updated_at']);
            }
            if (\array_key_exists('started_at', $data)) {
                $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['started_at']));
                unset($data['started_at']);
            }
            if (\array_key_exists('proxy_host', $data)) {
                $object->setProxyHost($data['proxy_host']);
                unset($data['proxy_host']);
            }
            if (\array_key_exists('suspend_timeout_seconds', $data)) {
                $object->setSuspendTimeoutSeconds($data['suspend_timeout_seconds']);
                unset($data['suspend_timeout_seconds']);
            }
            if (\array_key_exists('provisioner', $data)) {
                $object->setProvisioner($data['provisioner']);
                unset($data['provisioner']);
            }
            if (\array_key_exists('compute_release_version', $data)) {
                $object->setComputeReleaseVersion($data['compute_release_version']);
                unset($data['compute_release_version']);
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
            $data['host'] = $object->getHost();
            $data['id'] = $object->getId();
            $data['project_id'] = $object->getProjectId();
            $data['branch_id'] = $object->getBranchId();
            $data['autoscaling_limit_min_cu'] = $object->getAutoscalingLimitMinCu();
            $data['autoscaling_limit_max_cu'] = $object->getAutoscalingLimitMaxCu();
            $data['region_id'] = $object->getRegionId();
            $data['type'] = $object->getType();
            $data['current_state'] = $object->getCurrentState();
            if ($object->isInitialized('pendingState') && null !== $object->getPendingState()) {
                $data['pending_state'] = $object->getPendingState();
            }
            $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            $data['pooler_enabled'] = $object->getPoolerEnabled();
            $data['pooler_mode'] = $object->getPoolerMode();
            $data['disabled'] = $object->getDisabled();
            $data['passwordless_access'] = $object->getPasswordlessAccess();
            if ($object->isInitialized('lastActive') && null !== $object->getLastActive()) {
                $data['last_active'] = $object->getLastActive()?->format('Y-m-d\TH:i:sP');
            }
            $data['creation_source'] = $object->getCreationSource();
            $data['created_at'] = $object->getCreatedAt()?->format('Y-m-d\TH:i:sP');
            $data['updated_at'] = $object->getUpdatedAt()?->format('Y-m-d\TH:i:sP');
            if ($object->isInitialized('startedAt') && null !== $object->getStartedAt()) {
                $data['started_at'] = $object->getStartedAt()?->format('Y-m-d\TH:i:sP');
            }
            $data['proxy_host'] = $object->getProxyHost();
            $data['suspend_timeout_seconds'] = $object->getSuspendTimeoutSeconds();
            $data['provisioner'] = $object->getProvisioner();
            if ($object->isInitialized('computeReleaseVersion') && null !== $object->getComputeReleaseVersion()) {
                $data['compute_release_version'] = $object->getComputeReleaseVersion();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Parchmate\LaravelNeon\Generated\Model\Endpoint::class => false];
        }
    }
}