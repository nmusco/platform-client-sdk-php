<?php

declare(strict_types=1);

namespace PureCloudPlatform\Client\V2;

use Exception;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Token\AccessToken;
use OAuth\Client\TokenStorage\TokenStorageInterface;
use OAuth\Client\Exception\TokenNotFoundException;
use PureCloudPlatform\Client\V2\Api\AlertingApi;
use PureCloudPlatform\Client\V2\Api\AnalyticsApi;
use PureCloudPlatform\Client\V2\Api\ArchitectApi;
use PureCloudPlatform\Client\V2\Api\AuthorizationApi;
use PureCloudPlatform\Client\V2\Api\BillingApi;
use PureCloudPlatform\Client\V2\Api\ContentManagementApi;
use PureCloudPlatform\Client\V2\Api\ConversationsApi;
use PureCloudPlatform\Client\V2\Api\ExternalContactsApi;
use PureCloudPlatform\Client\V2\Api\FaxApi;
use PureCloudPlatform\Client\V2\Api\FlowsApi;
use PureCloudPlatform\Client\V2\Api\GeneralDataProtectionRegulationApi;
use PureCloudPlatform\Client\V2\Api\GeolocationApi;
use PureCloudPlatform\Client\V2\Api\GreetingsApi;
use PureCloudPlatform\Client\V2\Api\GroupsApi;
use PureCloudPlatform\Client\V2\Api\IdentityProviderApi;
use PureCloudPlatform\Client\V2\Api\IntegrationsApi;
use PureCloudPlatform\Client\V2\Api\LanguagesApi;
use PureCloudPlatform\Client\V2\Api\LicenseApi;
use PureCloudPlatform\Client\V2\Api\LocationsApi;
use PureCloudPlatform\Client\V2\Api\MessagingApi;
use PureCloudPlatform\Client\V2\Api\MobileDevicesApi;
use PureCloudPlatform\Client\V2\Api\NotificationsApi;
use PureCloudPlatform\Client\V2\Api\OAuthApi;
use PureCloudPlatform\Client\V2\Api\ObjectsApi;
use PureCloudPlatform\Client\V2\Api\OrganizationApi;
use PureCloudPlatform\Client\V2\Api\OrganizationAuthorizationApi;
use PureCloudPlatform\Client\V2\Api\OutboundApi;
use PureCloudPlatform\Client\V2\Api\PresenceApi;
use PureCloudPlatform\Client\V2\Api\QualityApi;
use PureCloudPlatform\Client\V2\Api\RecordingApi;
use PureCloudPlatform\Client\V2\Api\ResponseManagementApi;
use PureCloudPlatform\Client\V2\Api\RoutingApi;
use PureCloudPlatform\Client\V2\Api\SCIMApi;
use PureCloudPlatform\Client\V2\Api\ScriptsApi;
use PureCloudPlatform\Client\V2\Api\SearchApi;
use PureCloudPlatform\Client\V2\Api\SpeechTextAnalyticsApi;
use PureCloudPlatform\Client\V2\Api\StationsApi;
use PureCloudPlatform\Client\V2\Api\SuggestApi;
use PureCloudPlatform\Client\V2\Api\TelephonyApi;
use PureCloudPlatform\Client\V2\Api\TelephonyProvidersEdgeApi;
use PureCloudPlatform\Client\V2\Api\TokensApi;
use PureCloudPlatform\Client\V2\Api\UserRecordingsApi;
use PureCloudPlatform\Client\V2\Api\UsersApi;
use PureCloudPlatform\Client\V2\Api\UtilitiesApi;
use PureCloudPlatform\Client\V2\Api\VoicemailApi;
use PureCloudPlatform\Client\V2\Api\WebChatApi;
use PureCloudPlatform\Client\V2\Api\WidgetsApi;
use PureCloudPlatform\Client\V2\Api\WorkforceManagementApi;
use PureCloudPlatform\client\V2\Provider\Genesys as AuthProvider;


/**
 * Class ApiClient.
 *
 * @author   Nicholas Musco
 * @license  proprietary
 *
 * @link     http://github.com/nmusco/platform-client-sdk-php/
 */
class ApiClient
{
	/**
     * Genesys token.
     *
     * @var array
     */
    public $token;

    /**
     *
     * @var AbstractProvider
     */
    protected $authProvider;

    /**
     *
     * @var AccessToken
     */
	protected $accessToken;
	
	/**
	 * @var Array
	 */
	protected $clients;

    /**
     *
     * @var TokenStorageInterface
     */
	protected $tokenRepository;
	
	    /**
     * Client constructor.
     *
     * @param string $hostname
     *            ShareFile hostname
     * @param string $client_id
     *            OAuth2 client_id
     * @param string $client_secret
     *            OAuth2 client_secret
     * @param string $username
     *            ShareFile username
     * @param string $password
     *            ShareFile password
     * @param MockHandler|HandlerStack $handler
     *            Guzzle Handler
     * @param TokenStorageInterface $$tokenRepository
     *            OAuth2 Token Storage handler
     *
     * @throws Exception
     */
    public function __construct(string $baseApiUrl, string $baseAuthUrl, string $client_id, string $client_secret, string $username = '', string $password = '', $handler = null, TokenStorageInterface $tokenRepository = null)
    {
		$this->tokenRepository = $tokenRepository;
		$this->clientId = $client_id;

        $client = new HttpClient([
            'handler' => $handler
        ]);

        $this->authProvider = new AuthProvider([
            'clientId' => $client_id,
            'clientSecret' => $client_secret
        ], [
            'httpClient' => $client
		]);
		
		$this->options = [
			'baseApiUrl' = $baseApiUrl,
			'baseAuthUrl' = $baseAuthUrl,
		];

		if ($username !== '') {
			$this->options['username'] = $username;
		}
		
		if ($password !== '') {
			$this->options['password'] = $password;
		}
	}
	
	public function getAccessToken(): AccessToken
    {
		$tokenId = sprintf('genesys-client-%s', $this->clientId);
		if (isset($this->options['username'])) {
			$tokenId = sprintf('genesys-user-%s', $this->options['username']);
		}

        if ($this->accessToken === null) {
            if ($this->tokenRepository !== null) {
                try {
                	$this->accessToken = $this->tokenRepository->loadToken($tokenId);
                } catch(TokenNotFoundException $e) {}
            }

            if ($this->accessToken === null) {
				if (!isset($this->options['username'])) {
					$options = [
						'baseUrl' => $this->options['baseAuthUrl'],
					];

					$this->accessToken = $this->authProvider->getAccessToken('client_credentials', $options);
				} else {
					$options = [
						'baseUrl' => $this->options['baseAuthUrl'],
						'username' => $this->options['username'],
						'password' => '',
					];
					
					if (isset($this->options['password'])) {
						$options['password'] = $this->options['password'];
					}

					$this->accessToken = $this->authProvider->getAccessToken('password', $options);
				}

                if ($this->tokenRepository !== null) {
                    $this->tokenRepository->storeToken($this->accessToken, $tokenId);
                }
            }
        }

        if ($this->accessToken->hasExpired() === true) {
            $this->accessToken = $this->authProvider->getAccessToken('refresh_token', [
                'refresh_token' => $this->accessToken->getRefreshToken()
			]);
			
            if ($this->tokenRepository !== null) {
                $this->tokenRepository->storeToken($this->accessToken, $tokenId);
            }
		}
		
        return $this->accessToken;
	}
	
	public function getAlertingApi() : AlertingApi
	{
		if (!isset($this->clients['AlertingApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['AlertingApi'] = new AlertingApi($client, $configuration, null);
		}

		return $this->clients['AlertingApi'];
	}

	public function getAnalyticsApi() : AnalyticsApi
	{
		if (!isset($this->clients['AnalyticsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['AnalyticsApi'] = new AnalyticsApi($client, $configuration, null);
		}

		return $this->clients['AnalyticsApi'];
	}

	public function getArchitectApi() : ArchitectApi
	{
		if (!isset($this->clients['ArchitectApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['ArchitectApi'] = new ArchitectApi($client, $configuration, null);
		}

		return $this->clients['ArchitectApi'];
	}

	public function getAuthorizationApi() : AuthorizationApi
	{
		if (!isset($this->clients['AuthorizationApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['AuthorizationApi'] = new AuthorizationApi($client, $configuration, null);
		}

		return $this->clients['AuthorizationApi'];
	}

	public function getBillingApi() : BillingApi
	{
		if (!isset($this->clients['BillingApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['BillingApi'] = new BillingApi($client, $configuration, null);
		}

		return $this->clients['BillingApi'];
	}

	public function getContentManagementApi() : ContentManagementApi
	{
		if (!isset($this->clients['ContentManagementApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['ContentManagementApi'] = new ContentManagementApi($client, $configuration, null);
		}

		return $this->clients['ContentManagementApi'];
	}

	public function getConversationsApi() : ConversationsApi
	{
		if (!isset($this->clients['ConversationsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['ConversationsApi'] = new ConversationsApi($client, $configuration, null);
		}

		return $this->clients['ConversationsApi'];
	}

	public function getExternalContactsApi() : ExternalContactsApi
	{
		if (!isset($this->clients['ExternalContactsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['ExternalContactsApi'] = new ExternalContactsApi($client, $configuration, null);
		}

		return $this->clients['ExternalContactsApi'];
	}

	public function getFaxApi() : FaxApi
	{
		if (!isset($this->clients['FaxApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['FaxApi'] = new FaxApi($client, $configuration, null);
		}

		return $this->clients['FaxApi'];
	}

	public function getFlowsApi() : FlowsApi
	{
		if (!isset($this->clients['FlowsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['FlowsApi'] = new FlowsApi($client, $configuration, null);
		}

		return $this->clients['FlowsApi'];
	}

	public function getGeneralDataProtectionRegulationApi() : GeneralDataProtectionRegulationApi
	{
		if (!isset($this->clients['GeneralDataProtectionRegulationApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['GeneralDataProtectionRegulationApi'] = new GeneralDataProtectionRegulationApi($client, $configuration, null);
		}

		return $this->clients['GeneralDataProtectionRegulationApi'];
	}

	public function getGeolocationApi() : GeolocationApi
	{
		if (!isset($this->clients['GeolocationApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['GeolocationApi'] = new GeolocationApi($client, $configuration, null);
		}

		return $this->clients['GeolocationApi'];
	}

	public function getGreetingsApi() : GreetingsApi
	{
		if (!isset($this->clients['GreetingsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['GreetingsApi'] = new GreetingsApi($client, $configuration, null);
		}

		return $this->clients['GreetingsApi'];
	}

	public function getGroupsApi() : GroupsApi
	{
		if (!isset($this->clients['GroupsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['GroupsApi'] = new GroupsApi($client, $configuration, null);
		}

		return $this->clients['GroupsApi'];
	}

	public function getIdentityProviderApi() : IdentityProviderApi
	{
		if (!isset($this->clients['IdentityProviderApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['IdentityProviderApi'] = new IdentityProviderApi($client, $configuration, null);
		}

		return $this->clients['IdentityProviderApi'];
	}

	public function getIntegrationsApi() : IntegrationsApi
	{
		if (!isset($this->clients['IntegrationsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['IntegrationsApi'] = new IntegrationsApi($client, $configuration, null);
		}

		return $this->clients['IntegrationsApi'];
	}

	public function getLanguagesApi() : LanguagesApi
	{
		if (!isset($this->clients['LanguagesApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['LanguagesApi'] = new LanguagesApi($client, $configuration, null);
		}

		return $this->clients['LanguagesApi'];
	}

	public function getLicenseApi() : LicenseApi
	{
		if (!isset($this->clients['LicenseApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['LicenseApi'] = new LicenseApi($client, $configuration, null);
		}

		return $this->clients['LicenseApi'];
	}

	public function getLocationsApi() : LocationsApi
	{
		if (!isset($this->clients['LocationsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['LocationsApi'] = new LocationsApi($client, $configuration, null);
		}

		return $this->clients['LocationsApi'];
	}

	public function getMessagingApi() : MessagingApi
	{
		if (!isset($this->clients['MessagingApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['MessagingApi'] = new MessagingApi($client, $configuration, null);
		}

		return $this->clients['MessagingApi'];
	}

	public function getMobileDevicesApi() : MobileDevicesApi
	{
		if (!isset($this->clients['MobileDevicesApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['MobileDevicesApi'] = new MobileDevicesApi($client, $configuration, null);
		}

		return $this->clients['MobileDevicesApi'];
	}

	public function getNotificationsApi() : NotificationsApi
	{
		if (!isset($this->clients['NotificationsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['NotificationsApi'] = new NotificationsApi($client, $configuration, null);
		}

		return $this->clients['NotificationsApi'];
	}

	public function getOAuthApi() : OAuthApi
	{
		if (!isset($this->clients['OAuthApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['OAuthApi'] = new OAuthApi($client, $configuration, null);
		}

		return $this->clients['OAuthApi'];
	}

	public function getObjectsApi() : ObjectsApi
	{
		if (!isset($this->clients['ObjectsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['ObjectsApi'] = new ObjectsApi($client, $configuration, null);
		}

		return $this->clients['ObjectsApi'];
	}

	public function getOrganizationApi() : OrganizationApi
	{
		if (!isset($this->clients['OrganizationApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['OrganizationApi'] = new OrganizationApi($client, $configuration, null);
		}

		return $this->clients['OrganizationApi'];
	}

	public function getOrganizationAuthorizationApi() : OrganizationAuthorizationApi
	{
		if (!isset($this->clients['OrganizationAuthorizationApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['OrganizationAuthorizationApi'] = new OrganizationAuthorizationApi($client, $configuration, null);
		}

		return $this->clients['OrganizationAuthorizationApi'];
	}

	public function getOutboundApi() : OutboundApi
	{
		if (!isset($this->clients['OutboundApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['OutboundApi'] = new OutboundApi($client, $configuration, null);
		}

		return $this->clients['OutboundApi'];
	}

	public function getPresenceApi() : PresenceApi
	{
		if (!isset($this->clients['PresenceApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['PresenceApi'] = new PresenceApi($client, $configuration, null);
		}

		return $this->clients['PresenceApi'];
	}

	public function getQualityApi() : QualityApi
	{
		if (!isset($this->clients['QualityApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['QualityApi'] = new QualityApi($client, $configuration, null);
		}

		return $this->clients['QualityApi'];
	}

	public function getRecordingApi() : RecordingApi
	{
		if (!isset($this->clients['RecordingApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['RecordingApi'] = new RecordingApi($client, $configuration, null);
		}

		return $this->clients['RecordingApi'];
	}

	public function getResponseManagementApi() : ResponseManagementApi
	{
		if (!isset($this->clients['ResponseManagementApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['ResponseManagementApi'] = new ResponseManagementApi($client, $configuration, null);
		}

		return $this->clients['ResponseManagementApi'];
	}

	public function getRoutingApi() : RoutingApi
	{
		if (!isset($this->clients['RoutingApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['RoutingApi'] = new RoutingApi($client, $configuration, null);
		}

		return $this->clients['RoutingApi'];
	}

	public function getSCIMApi() : SCIMApi
	{
		if (!isset($this->clients['SCIMApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['SCIMApi'] = new SCIMApi($client, $configuration, null);
		}

		return $this->clients['SCIMApi'];
	}

	public function getScriptsApi() : ScriptsApi
	{
		if (!isset($this->clients['ScriptsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['ScriptsApi'] = new ScriptsApi($client, $configuration, null);
		}

		return $this->clients['ScriptsApi'];
	}

	public function getSearchApi() : SearchApi
	{
		if (!isset($this->clients['SearchApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['SearchApi'] = new SearchApi($client, $configuration, null);
		}

		return $this->clients['SearchApi'];
	}

	public function getSpeechTextAnalyticsApi() : SpeechTextAnalyticsApi
	{
		if (!isset($this->clients['SpeechTextAnalyticsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['SpeechTextAnalyticsApi'] = new SpeechTextAnalyticsApi($client, $configuration, null);
		}

		return $this->clients['SpeechTextAnalyticsApi'];
	}

	public function getStationsApi() : StationsApi
	{
		if (!isset($this->clients['StationsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['StationsApi'] = new StationsApi($client, $configuration, null);
		}

		return $this->clients['StationsApi'];
	}

	public function getSuggestApi() : SuggestApi
	{
		if (!isset($this->clients['SuggestApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['SuggestApi'] = new SuggestApi($client, $configuration, null);
		}

		return $this->clients['SuggestApi'];
	}

	public function getTelephonyApi() : TelephonyApi
	{
		if (!isset($this->clients['TelephonyApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['TelephonyApi'] = new TelephonyApi($client, $configuration, null);
		}

		return $this->clients['TelephonyApi'];
	}

	public function getTelephonyProvidersEdgeApi() : TelephonyProvidersEdgeApi
	{
		if (!isset($this->clients['TelephonyProvidersEdgeApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['TelephonyProvidersEdgeApi'] = new TelephonyProvidersEdgeApi($client, $configuration, null);
		}

		return $this->clients['TelephonyProvidersEdgeApi'];
	}

	public function getTokensApi() : TokensApi
	{
		if (!isset($this->clients['TokensApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['TokensApi'] = new TokensApi($client, $configuration, null);
		}

		return $this->clients['TokensApi'];
	}

	public function getUserRecordingsApi() : UserRecordingsApi
	{
		if (!isset($this->clients['UserRecordingsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['UserRecordingsApi'] = new UserRecordingsApi($client, $configuration, null);
		}

		return $this->clients['UserRecordingsApi'];
	}

	public function getUsersApi() : UsersApi
	{
		if (!isset($this->clients['UsersApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['UsersApi'] = new UsersApi($client, $configuration, null);
		}

		return $this->clients['UsersApi'];
	}

	public function getUtilitiesApi() : UtilitiesApi
	{
		if (!isset($this->clients['UtilitiesApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['UtilitiesApi'] = new UtilitiesApi($client, $configuration, null);
		}

		return $this->clients['UtilitiesApi'];
	}

	public function getVoicemailApi() : VoicemailApi
	{
		if (!isset($this->clients['VoicemailApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();

			$this->clients['VoicemailApi'] = new VoicemailApi($client, $configuration, null);
		}

		return $this->clients['VoicemailApi'];
	}

	public function getWebChatApi() : WebChatApi
	{
		if (!isset($this->clients['WebChatApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();
			
			$this->clients['WebChatApi'] = new WebChatApi($client, $configuration, null);
		}

		return $this->clients['WebChatApi'];
	}

	public function getWidgetsApi() : WidgetsApi
	{
		if (!isset($this->clients['WidgetsApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();
			
			$this->clients['WidgetsApi'] = new WidgetsApi($client, $configuration, null);
		}

		return $this->clients['WidgetsApi'];
	}

	public function getWorkforceManagementApi() : WorkforceManagementApi
	{
		if (!isset($this->clients['WorkforceManagementApi'])) {
			$client = $this->authProvider->getHttpClient();
			$configuration = $this->getConfiguration();
			
			$this->clients['WorkforceManagementApi'] = new WorkforceManagementApi($client, $configuration, null);
		}

		return $this->clients['WorkforceManagementApi'];
	}

	private function getConfiguration() : Configuration
	{
		$configuration = \PureCloudPlatform\Client\V2\Configuration::getDefaultConfiguration();
		$configuration->setAccessToken($this->getAccessToken()->getToken());
		$configuration->setHost($this->options['baseApiUrl']);
		return $configuration;
	}
}