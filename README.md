# Shortcode Modal Plugin

This **Shortcode Modal** plugin provides a way to display simple modal popups on any [Grav CMS](https://getgrav.org/)
site.

You can try out a [plugin demo](https://demos.crazedbytes.net/shortcode-modal) to see the user experience.

## Plugin Installation

> NOTE: GPM or admin panel installation of this plugin is not yet available.  

### Dependencies

This plugin requires the [Shortcode Core](https://github.com/getgrav/grav-plugin-shortcode-core) plugin to also be 
installed.

### Manual Installation

To install this plugin manually, just download the zip version of this repository and unzip it under 
`<Grav install path>/user/plugins`. Then, rename the folder to `shortcode-modal`. You can find these files on 
[GitHub](https://github.com/marshmn/grav-plugin-shortcode-modal).

You should now have all the plugin files under: `<Grav install path>/user/plugins/shortcode-modal`
	
## Plugin Configuration

If you're using the Grav admin panel plugin, then all settings can be configured through the Shortcode Modal plugin page
within it. Alternatively, if you're modifying the configuration by hand, you should copy the 
`user/plugins/shortcode-modal/shortcode-modal.yaml` to `user/config/plugins/shortcode-modal.yaml` and only edit that 
copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

 - **enabled:** Sets whether the plugin is active or not

> NOTE: if you use the admin panel plugin, a file with your configuration, and named `shortcode-modal.yaml` will be 
> saved in the `user/config/plugins/` folder once the configuration is saved in the admin.

## Usage

The plugin consists of two different shortcodes, one (`[modal]`) which defines content to be displayed within the modal,
and another (`[modal-launch]`) which places a link on the page to launch the modal.

```
[modal name="mymodal"]

Hello, World!

[/modal]


[modal-launch modal="mymodal"] Launch Modal [/modal-launch]
```

The `modal` parameter of the `[modal-launch]` shortcode needs to match the `name` parameter on the `[modal]` shortcode.

An additional parameter of `classes` can be set on the `[modal-launch]` shortcode in order to add classes to the link 
element - this way you can style the link as a button for example, depending on what is available in your theme:

```
[modal-launch modal="mymodal" classes="btn btn-primary btn-lg"] Launch Modal [/modal-launch]
```

See the [plugin demo](https://demos.crazedbytes.net/shortcode-modal) for more examples.
