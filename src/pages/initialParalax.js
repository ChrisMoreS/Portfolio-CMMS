import cmms2 from '../style_utilities/imgs/whoami/WhoAm2.jpg'

export const InitialParalax = () => {
    return(
        <>
            <div className='mt-16 mb-10'>
                <div className="flex flex-col justify-center items-center">
                    <img src={cmms2} alt="" className='h-40 w-40 rounded-full object-cover mb-3' />
                    <p className='text-sm text-center'>I am <strong>Christian Moreno</strong> <br /> and I'm a <strong><i>Junior Web Developer</i></strong></p>
                </div>
            </div>
            <div className='mb-16'>
                <h3>News</h3>
            </div>
        </>
    )
}