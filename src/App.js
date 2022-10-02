import { Routes, Route, Link} from 'react-router-dom';
import { Header, Footer } from './components/exports';
import { InitialParalax } from './pages/exports'

function App() {
  return(
    <div className='flex flex-col h-screen'>
      <Header />
      <InitialParalax />
      <Footer />
    </div>
  )
}

export default App