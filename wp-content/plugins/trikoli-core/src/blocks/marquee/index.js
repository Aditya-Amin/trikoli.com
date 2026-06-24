import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, RangeControl, ToggleControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const a = attributes;
		const bp = useBlockProps( { className: `tk-marquee${ a.reverse ? ' is-reverse' : '' }`, style: { '--tk-marquee-speed': `${ a.speed }s` } } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Marquee', 'trikoli' ) }>
						<RangeControl label={ __( 'Speed (seconds)', 'trikoli' ) } value={ a.speed } min={ 5 } max={ 60 } onChange={ ( v ) => setAttributes( { speed: v } ) } />
						<ToggleControl label={ __( 'Reverse direction', 'trikoli' ) } checked={ a.reverse } onChange={ ( v ) => setAttributes( { reverse: v } ) } />
					</PanelBody>
				</InspectorControls>
				<div { ...bp }>
					<RichText tagName="div" className="tk-marquee__track" value={ a.text } onChange={ ( v ) => setAttributes( { text: v } ) } placeholder={ __( 'Scrolling text…', 'trikoli' ) } allowedFormats={ [] } />
				</div>
			</>
		);
	},
	save( { attributes } ) {
		const a = attributes;
		const bp = useBlockProps.save( { className: `tk-marquee${ a.reverse ? ' is-reverse' : '' }`, style: { '--tk-marquee-speed': `${ a.speed }s` } } );
		return (
			<div { ...bp } aria-hidden="true">
				<div className="tk-marquee__viewport">
					<div className="tk-marquee__track"><RichText.Content value={ a.text } /></div>
					<div className="tk-marquee__track" aria-hidden="true"><RichText.Content value={ a.text } /></div>
				</div>
			</div>
		);
	},
} );
