import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, SelectControl, ToggleControl, TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

const cls = ( a ) =>
	`tk-btn tk-btn--${ a.style } tk-btn--${ a.size }${ a.icon ? ' tk-btn--icon' : '' }`;

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const blockProps = useBlockProps( { className: 'tk-btn-wrap' } );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Button', 'trikoli' ) }>
						<TextControl
							label={ __( 'Link URL', 'trikoli' ) }
							value={ attributes.url }
							onChange={ ( url ) => setAttributes( { url } ) }
						/>
						<SelectControl
							label={ __( 'Style', 'trikoli' ) }
							value={ attributes.style }
							options={ [
								{ label: 'Primary', value: 'primary' },
								{ label: 'Outline', value: 'outline' },
								{ label: 'White', value: 'white' },
								{ label: 'Navy', value: 'navy' },
							] }
							onChange={ ( v ) => setAttributes( { style: v } ) }
						/>
						<SelectControl
							label={ __( 'Size', 'trikoli' ) }
							value={ attributes.size }
							options={ [
								{ label: 'Small', value: 'sm' },
								{ label: 'Medium', value: 'md' },
								{ label: 'Large', value: 'lg' },
							] }
							onChange={ ( v ) => setAttributes( { size: v } ) }
						/>
						<ToggleControl
							label={ __( 'Arrow icon', 'trikoli' ) }
							checked={ attributes.icon }
							onChange={ ( v ) => setAttributes( { icon: v } ) }
						/>
						<ToggleControl
							label={ __( 'Open in new tab', 'trikoli' ) }
							checked={ attributes.newTab }
							onChange={ ( v ) => setAttributes( { newTab: v } ) }
						/>
					</PanelBody>
				</InspectorControls>
				<div { ...blockProps }>
					<RichText
						tagName="span"
						className={ cls( attributes ) }
						value={ attributes.text }
						onChange={ ( text ) => setAttributes( { text } ) }
						placeholder={ __( 'Button text', 'trikoli' ) }
						allowedFormats={ [] }
					/>
				</div>
			</>
		);
	},
	save( { attributes } ) {
		const blockProps = useBlockProps.save( { className: 'tk-btn-wrap' } );
		const rel = attributes.newTab ? 'noopener noreferrer' : undefined;
		return (
			<div { ...blockProps }>
				<a
					className={ cls( attributes ) }
					href={ attributes.url }
					target={ attributes.newTab ? '_blank' : undefined }
					rel={ rel }
				>
					<RichText.Content value={ attributes.text } />
					{ attributes.icon && <span className="tk-btn__arrow" aria-hidden="true">→</span> }
				</a>
			</div>
		);
	},
} );
