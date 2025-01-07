<?php

namespace Natpnk\TransIPLaravel;

/**
 * @method static \Transip\Api\Library\Repository\AvailabilityZoneRepository availabilityZone()
 * @method static \Transip\Api\Library\Repository\ProductRepository products()
 * @method static \Transip\Api\Library\Repository\Product\ElementRepository productElements()
 * @method static \Transip\Api\Library\Repository\SshKeyRepository sshKey()
 * @method static \Transip\Api\Library\Repository\SslCertificateRepository sslCertificate()
 * @method static \Transip\Api\Library\Repository\SslCertificate\DetailsRepository sslCertificateDetails()
 * @method static \Transip\Api\Library\Repository\InvoiceRepository invoice()
 * @method static \Transip\Api\Library\Repository\Invoice\PdfRepository invoicePdf()
 * @method static \Transip\Api\Library\Repository\Invoice\ItemRepository invoiceItem()
 * @method static \Transip\Api\Library\Repository\DomainRepository domains()
 * @method static \Transip\Api\Library\Repository\Domain\ActionRepository domainAction()
 * @method static \Transip\Api\Library\Repository\Domain\BrandingRepository domainBranding()
 * @method static \Transip\Api\Library\Repository\Domain\ContactRepository domainContact()
 * @method static \Transip\Api\Library\Repository\Domain\DnsRepository domainDns()
 * @method static \Transip\Api\Library\Repository\Domain\DnsSecRepository domainDnsSec()
 * @method static \Transip\Api\Library\Repository\Domain\NameserverRepository domainNameserver()
 * @method static \Transip\Api\Library\Repository\Domain\SslRepository domainSsl()
 * @method static \Transip\Api\Library\Repository\Domain\WhoisRepository domainWhois()
 * @method static \Transip\Api\Library\Repository\DomainAvailabilityRepository domainAvailability()
 * @method static \Transip\Api\Library\Repository\DomainTldRepository domainTlds()
 * @method static \Transip\Api\Library\Repository\DomainWhitelabelRepository domainWhitelabel()
 * @method static \Transip\Api\Library\Repository\TrafficRepository traffic()
 * @method static \Transip\Api\Library\Repository\TrafficPoolRepository trafficPool()
 * @method static \Transip\Api\Library\Repository\VpsRepository vps()
 * @method static \Transip\Api\Library\Repository\AddonRepository vpsAddons()
 * @method static \Transip\Api\Library\Repository\Vps\BackupRepository vpsBackups()
 * @method static \Transip\Api\Library\Repository\Vps\FirewallRepository vpsFirewall()
 * @method static \Transip\Api\Library\Repository\Vps\IpAddressRepository vpsIpAddresses()
 * @method static \Transip\Api\Library\Repository\OperatingSystemRepository vpsOperatingSystems()
 * @method static \Transip\Api\Library\Repository\SnapshotRepository vpsSnapshots()
 * @method static \Transip\Api\Library\Repository\UpgradeRepository vpsUpgrades()
 * @method static \Transip\Api\Library\Repository\UsageRepository vpsUsage()
 * @method static \Transip\Api\Library\Repository\VncDataRepository vpsVncData()
 * @method static \Transip\Api\Library\Repository\TCPMonitorRepository vpsTCPMonitor()
 * @method static \Transip\Api\Library\Repository\MonitoringContactRepository vpsTCPMonitorContact()
 * @method static \Transip\Api\Library\Repository\LicenseRepository vpsLicenses()
 * @method static \Transip\Api\Library\Repository\PrivateNetworkRepository privateNetworks()
 * @method static \Transip\Api\Library\Repository\BigStorageRepository bigStorages()
 * @method static \Transip\Api\Library\Repository\BigStorage\BackupRepository bigStorageBackups()
 * @method static \Transip\Api\Library\Repository\BigStorage\UsageRepository bigStorageUsage()
 * @method static \Transip\Api\Library\Repository\MailServiceRepository mailService()
 * @method static \Transip\Api\Library\Repository\Haip\Repository haip()
 * @method static \Transip\Api\Library\Repository\Haip\IpAddressRepository haipIpAddresses()
 * @method static \Transip\Api\Library\Repository\PortConfigurationRepository haipPortConfigurations()
 * @method static \Transip\Api\Library\Repository\HaipCertificateRepository haipCertificates()
 * @method static \Transip\Api\Library\Repository\StatusReportRepository haipStatusReports()
 * @method static \Transip\Api\Library\Repository\ColocationRepository colocation()
 * @method static \Transip\Api\Library\Repository\Cololocation\IpAddressRepository colocationIpAddress()
 * @method static \Transip\Api\Library\Repository\Cololocation\RemoteHandsRepository colocationRemoteHands()
 * @method static \Transip\Api\Library\Repository\OpenStack\ProjectRepository openStackProjects()
 * @method static \Transip\Api\Library\Repository\OpenStack\ProjectUserRepository openStackProjectUsers()
 * @method static \Transip\Api\Library\Repository\OpenStack\UserRepository openStackUsers()
 * @method static \Transip\Api\Library\Repository\MailForwardRepository mailForwards()
 * @method static \Transip\Api\Library\Repository\MailboxRepository mailboxes()
 * @method static \Transip\Api\Library\Repository\MailListRepository mailLists()
 * @method static \Transip\Api\Library\Repository\ApiTestRepository test()
 * @method static \Transip\Api\Library\Repository\AuthRepository auth()
 *
 * @see \Transip\Api\Library\TransipAPI
 */
class TransIPFacade extends \Illuminate\Support\Facades\Facade {
    
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor(){
        return 'transip';
    }
}