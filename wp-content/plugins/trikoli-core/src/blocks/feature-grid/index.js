import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, useInnerBlocksProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import metadata from './block.json';

const TEMPLATE = [
	[ 'trikoli/feature-card', {} ],
	[ 'trikoli/feature-card', {} ],
	[ 'trikoli/feature-card', {} ],
];

registerBlockType( metadata.name, {
	edit( { attributes, setAttributes } ) {
		const { columns } = attributes;
		const blockProps = useBlockProps( {
			className: `tk-feature-grid tk-cols-${ columns }`,
			style: { '--tk-cols': columns },
		} );
		const innerProps = useInnerBlocksProps( blockProps, {
			template: TEMPLATE,
			allowedBlocks: [ 'trikoli/feature-card' ],
			orientation: 'horizontal',
		} );
		return (
			<>
				<InspectorControls>
					<PanelBody title={ __( 'Grid', 'trikoli' ) }>
						<RangeControl
							label={ __( 'Columns', 'trikoli' ) }
							value={ columns }
							min={ 1 }
							max={ 4 }
							onChange={ ( v ) => setAttributes( { columns: v } ) }
						/>
					</PanelBody>
				</InspectorControls>
				<div { ...innerProps } />
			</>
		);
	},
	save( { attributes } ) {
		const { columns } = attributes;
		const blockProps = useBlockProps.save( {
			className: `tk-feature-grid tk-cols-${ columns }`,
			style: { '--tk-cols': columns },
		} );
		const innerProps = useInnerBlocksProps.save( blockProps );
		return <div { ...innerProps } />;
	},
} );
