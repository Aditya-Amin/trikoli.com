import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, useInnerBlocksProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ToggleControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

const TEMPLATE = [
	[ 'trikoli/faq-item', {} ],
	[ 'trikoli/faq-item', {} ],
	[ 'trikoli/faq-item', {} ],
];

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const blockProps = useBlockProps( { className: 'tk-faq', 'data-single': String( attributes.single ) } );
		const innerProps = useInnerBlocksProps( blockProps, {
			template: TEMPLATE,
			allowedBlocks: [ 'trikoli/faq-item' ],
		} );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'FAQ', 'trikoli' ) }>
						<ToggleControl
							label={ __( 'Only one open at a time', 'trikoli' ) }
							checked={ attributes.single }
							onChange={ ( v ) => setAttributes( { single: v } ) }
						/>
					</PanelBody>
				</InspectorControls>
				<div { ...innerProps } />
			</>
		);
	},
	save( { attributes } ) {
		const blockProps = useBlockProps.save( { className: 'tk-faq', 'data-single': String( attributes.single ) } );
		const innerProps = useInnerBlocksProps.save( blockProps );
		return <div { ...innerProps } />;
	},
} );
